@extends('layouts.app')

@section('content')
    <div class="articles__container">
        <span class="article__image">
            <img src="{{ Storage::url($post->image->path) }}" alt="">
        </span>
        <div class="articles__card">
            <h2 class="article__title fancy-text ucfirst noclick">{{ $post->title }}</h2>
            <div class="article__content">
                <p class="description">{{ $post->description }}</p>
            </div>
            <span class="article__price">{{ $post->price }}
                <small class="en">円</small>
            </span>
            <div class="article__btn">
                <button class="purchase btn">add to wishlist</button>
                <span>or</span>
                <button class="purchase btn">add to cart</button>
            </div>
            @forelse ($post->comments as $comment)
                <div class="article__comment">
                    <h3 class="fancy-comment noclick">Comments</h1>
                    <span class="comment">Miyuna : {{ $comment->content }}</span>
                    <small>
                        posted at {{ $comment->created_at->isoFormat('H:m') }}
                        on {{ $comment->created_at->isoFormat('dddd D MMMM Y') }}
                    </small>
                </div>
            @empty
            @endforelse
            <div class="tags">
                @forelse ($post->tags as $tag)
                    <span>{{ $tag->name }}</span>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection