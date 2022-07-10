@extends('layouts.app')

@section('content')
    <h1>Welcome to my Shop</h1>
    <hr>
    <br>
    <h2>Random Articles</h2>
    <br>
    @if ($posts->count() > 0)
        
    <div class="card__container">
        @foreach ($posts as $post)
            <div class="card__articles">
                <div class="card">
                    <h3 class="articles__title"><a class="fancy-link" href="{{ route('articles.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
                    <span class="article__image">
                        <a href="{{ route('articles.show', ['id' => $post->id]) }}"">
                            <img src="{{ Storage::url($post->image->path) }}" alt="">    
                        </a>
                    </span>
                    <span class="article__price">
                        <a href="{{ route('articles.show', ['id' => $post->id]) }}"">
                            {{ $post->price }}
                            <small class="en">円</small>
                        </a>
                        <button class="purchase btn">buy</button>
                    </span>
                    <small>{{ $post->created_at->isoFormat('dddd D MMMM Y — H:mm') }}</small>
                </div>
            </div>
        @endforeach
        @else
            <span>There are no posts in database</span>
        @endif
    </div>
@endsection