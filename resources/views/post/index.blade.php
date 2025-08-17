<x-layout :title="$page_title">
    <h2>{{ $page_title }}</h2>
    <p>
        @foreach ($posts as $post)
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->auther }}</p>
            <p>{{ $post->body }}</p>
            <br>
            @foreach ($post->comments as $comment)
                {{ $comment->auther }} - {{ $comment->content }}
                <br>
            @endforeach
            <br>


        @endforeach

    {{ $posts->links() }}
    </p>
</x-layout>