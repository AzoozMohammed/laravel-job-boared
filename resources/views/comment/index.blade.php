<x-layout :title="$page_title">
    <h2>{{ $page_title }}</h2>
    <p>
        @foreach ($comments as $comment)
            <h1>{{ $comment->auther }} </h1>
            <p>{{ $comment->content }}</p>
            <a href="post/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
            <br>
            <br>
        @endforeach
        {{ $comments->links() }}
    </p>
</x-layout>