<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\UserActivity; // Import the UserActivity model
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::all();
        return view('user-polls.polls', compact('polls'));
    }

    public function create()
    {
        return view('user-polls.create-poll');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'question' => 'required|string|max:255',
                'options' => 'required|array|min:2',
                'options.*' => 'required|string|max:255',
                'allow_multiple' => 'sometimes|boolean',
            ]);

            $allowMultiple = $request->has('allow_multiple');

            // Save poll to database
            $poll = Poll::create([
                'title' => $validatedData['title'],
                'question' => $validatedData['question'],
                'allow_multiple' => $allowMultiple,
            ]);

            // Save poll options to database
            foreach ($validatedData['options'] as $option) {
                $poll->options()->create(['option' => $option]);
            }

            // Generate poll HTML file
            $pollTitle = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $poll->title)); // Replace spaces with hyphens and remove punctuation
            $date = now()->format('d-m-Y');
            $fileName = "{$date}-{$pollTitle}.html";
            $pollHtml = view('user-polls.poll-template', compact('poll'))->render();

            $filePath = resource_path("views/public/polls/{$fileName}");
            File::ensureDirectoryExists(resource_path('views/public/polls'));
            File::put($filePath, $pollHtml);

            Log::info("Generated poll file at: {$filePath}");

            // Create a new table for storing poll results
            $tableName = 'poll_results_' . $poll->id;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('poll_option_id');
                $table->foreign('poll_option_id')->references('id')->on('poll_options');
                $table->timestamps();
            });

            // Log the activity
            UserActivity::create([
                'user_id' => Auth::id(),
                'activity_type' => 'poll_created',
                'activity_description' => "You created a new poll titled '{$poll->title}'.",
            ]);

            return redirect()->route('poll.manage')->with('success', 'Poll created successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating poll: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }

    public function vote(Poll $poll, Request $request)
    {
        $options = $request->input('options', []);
        $tableName = 'poll_results_' . $poll->id;

        foreach ($options as $optionId) {
            DB::table($tableName)->insert(['poll_option_id' => $optionId, 'created_at' => now(), 'updated_at' => now()]);
        }

        // Log the activity
        UserActivity::create([
            'user_id' => Auth::id(),
            'activity_type' => 'poll_voted',
            'activity_description' => "You voted in the poll titled '{$poll->title}'.",
        ]);

        return redirect()->back()->with('success', 'Vote recorded successfully!');
    }

    public function manage()
    {
        $polls = Poll::all();
        return view('user-polls.manage-polls', compact('polls'));
    }

    public function viewPoll($fileName)
    {
        $path = resource_path("views/public/polls/{$fileName}");
        if (File::exists($path)) {
            return response()->file($path);
        }
        return abort(404, 'Poll file not found');
    }

    public function showVotes($id)
    {
        $poll = Poll::findOrFail($id);
        $tableName = 'poll_results_' . $poll->id;
        $votes = DB::table($tableName)
            ->join('poll_options', 'poll_results_' . $poll->id . '.poll_option_id', '=', 'poll_options.id')
            ->select('poll_options.option', DB::raw('count(poll_results_' . $poll->id . '.id) as vote_count'))
            ->groupBy('poll_options.option')
            ->orderBy('vote_count', 'desc')
            ->get();

        $totalVotes = DB::table($tableName)->count();

        return view('user-polls.votes', compact('poll', 'votes', 'totalVotes'));
    }
}
