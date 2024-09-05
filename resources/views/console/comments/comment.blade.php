<div class="comment">
    <a class="comment-avatar pull-left" href="#"><img src="{{ asset('admin/img/avatar.png') }}" alt="Avatar"></a>
    <div class="comment-text">
        <p>{{ $comment->content }}</p>
    </div>
    <div class="clearfix"></div>
    <div class="comment-form">
        <form action="{{ route('comments.store', ['postId' => $comment->post_id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="content" placeholder="Enter Comment">
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            </div>
            <button type="submit" class="btn btn-default">Reply</button>
        </form>
    </div>
    <div class="comments">
        @foreach ($comment->replies as $reply)
        @include('console.comments.comment', ['comment' => $reply])
        @endforeach
    </div>
</div>
