<x-layout>

    @include ("_posts-header")
    @if ($posts->count())

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card :post="$posts[0]" />

        @if ($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">

                @foreach ($posts->skip(1) as $post)
                <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>

                @endforeach
        </div>
        @endif
    </main>

    @else
        No posts yet
    @endif

    <!-- @foreach ($posts as $post)
    <article>

        <h1><a href="/posts/{{$post->slug}}"> {{$post->title}} </a></h1>
        <div>
            published by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/category/{{$post->category->slug}}">#{{$post->category->name}}</a>
        </div>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach -->

</x-layout>
