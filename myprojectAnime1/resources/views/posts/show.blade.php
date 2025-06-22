<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<h3>Comments</h3>
@foreach ($post->comments as $comment)
    <p><strong>{{ $comment->author }}:</strong> {{ $comment->body }}</p>
@endforeach

<form action="{{ route('posts.addComment', $post) }}" method="POST">
    @csrf
    <input type="text" name="author" placeholder="Naam">
    <textarea name="body" placeholder="Comment"></textarea>
    <button type="submit">Add Comment</button>
</form>
