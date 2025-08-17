<x-layout :title="$page_title">
<h2>{{ $page_title }}</h2>
<p>
        {{ $post->title }} - {{ $post->auther }} - {{ $post->body  }}
        <br>
</p>
</x-layout>    

