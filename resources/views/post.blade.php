<x-layout>
    <article>
        <h1> {{$post->title}} </h1>
        <i> {{$post->published_at}} </i>
        <div>
            published by <a href="#">{{$post->user->name}}</a> <a href="/category/{{$post->category->slug}}">#{{$post->category->name}}</a>
        </div>
        <p>
            {!!$post->body!!}
        </p>

    </article>

    <a href="/">Go back</a>


</x-layout>
