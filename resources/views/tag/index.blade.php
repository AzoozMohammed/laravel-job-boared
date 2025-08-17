<x-layout :title="$page_title">
    <h2>{{ $page_title }}</h2>
    <p>
        @foreach ($tags as $tag)
            {{ $tag->title }} 
            <br>
            <br>
        @endforeach
        {{ $tags->links() }}
    </p>
</x-layout>