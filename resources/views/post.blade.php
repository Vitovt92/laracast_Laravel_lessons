<x-layout>
    <article>
        <h1> {{$post->title}} </h1>
        <i> {{$post->date}} </i>
        <p>
            {!!$post->body!!}
        </p>

    </article>

    <a href="/">Go back</a>


</x-layout>
