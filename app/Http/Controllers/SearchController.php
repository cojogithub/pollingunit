<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query
        $query = $request->input('search');
        $results = [];

        // Directory where the Blade views are stored
        $viewPath = resource_path('views');

        // Get all Blade files recursively, excluding 'partials' and 'search' directories
        $bladeFiles = collect(File::allFiles($viewPath))->filter(function ($file) {
            return !Str::contains($file->getRealPath(), ['partials', 'search']);
        });

        // Loop through each Blade file and search for the query within headings and paragraphs
        foreach ($bladeFiles as $file) {
            $content = File::get($file->getRealPath());

            // Extract content within <h1>, <h2>, <h3>, <h4>, <h5>, <h6>, and <p> tags
            $filteredContent = $this->extractRelevantContent($content);

            // Search for the query in the filtered content (case-insensitive)
            if (Str::contains(Str::lower($filteredContent), Str::lower($query))) {
                // Extract the heading and surrounding text for each match
                $results[] = $this->extractSnippet($file, $filteredContent, $query);
            }
        }

        // Paginate the results (10 per page)
        $perPage = 10;
        $currentPage = $request->input('page', 1); // Get the current page or default to 1
        $totalResults = count($results);
        $results = array_slice($results, ($currentPage - 1) * $perPage, $perPage);
        
        // Render the view with the search results
        return view('search.results', compact('results', 'query', 'totalResults', 'perPage', 'currentPage'));
    }

    private function extractRelevantContent($content)
    {
        // Use regex to extract content only within <h1> to <h6> and <p> tags
        $matches = [];

        preg_match_all('/<(h[1-6]|p)[^>]*>(.*?)<\/\1>/si', $content, $matches);

        // Combine all matches (headings and paragraphs) into a single string
        return implode(' ', $matches[2]);
    }

    private function extractSnippet($file, $content, $query)
    {
        // Extract heading: Let's assume heading in the file is marked by <h1> or <h2> tags
        $heading = $this->extractHeading($content, $file);

        // Find the position of the query using stripos (case-insensitive search)
        $queryPosition = stripos($content, $query);

        // Extract some text surrounding the query (e.g., 100 characters before and after)
        if ($queryPosition !== false) {
            $start = max($queryPosition - 100, 0);
            $snippet = substr($content, $start, 200);

            // Highlight the query in the snippet
            $highlightedSnippet = str_ireplace($query, "<strong>$query</strong>", $snippet);
        } else {
            $highlightedSnippet = '';
        }

        // Get the route name using Str helpers
        $routeName = Str::slug(str_replace('.blade.php', '', $file->getFilename()), '-');

        // Build a clickable link using route names
        $pageUrl = route(
            $routeName === 'electioncoordination' ? 'election-coordination' :
            ($routeName === 'pollingunitmanagement' ? 'polling-unit-management' :
            ($routeName === 'politicalconnection' ? 'political.connection' :
            ($routeName === 'form' ? 'form.show' :
            ($routeName === 'landing' ? 'landing.page' :
            ($routeName === 'create-poll' ? 'poll.create' :
            ($routeName === 'index' ? 'home' :
            ($routeName === 'managepolls' ? 'poll.manage' :
            ($routeName === 'poll-results' ? 'poll.results' : $routeName))))))))
        );        

        return [
            'file' => '<a href="' . $pageUrl . '">' . $pageUrl . '</a>', // Make the file link clickable
            'heading' => $heading,
            'snippet' => $highlightedSnippet
        ];
    }

    private function extractHeading($content, $file)
    {
        // Use regex to find the first <h1> in the content and use it as the heading
        if (preg_match('/<h1[^>]*>(.*?)<\/h1>/', $content, $matches)) {
            return $matches[1];  // Return the first <h1> as the heading
        }

        // If no <h1> is found, check for <h2>
        if (preg_match('/<h2[^>]*>(.*?)<\/h2>/', $content, $matches)) {
            return $matches[1];
        }

        // If no <h1> or <h2> is found, return the filename without '.blade.php'
        return str_replace('.blade.php', '', $file->getFilename());
    }
}
