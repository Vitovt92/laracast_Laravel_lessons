<x-layout>
    @foreach ($posts as $post)
    <article>

        <h1><a href="/posts/{{$post->slug}}"> {{$post->title}} </a></h1>
        <div>
            published by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/category/{{$post->category->slug}}">#{{$post->category->name}}</a>
        </div>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach

</x-layout>
