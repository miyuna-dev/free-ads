@extends('layouts.app')

@section('content')
    <h1 class="fancy-text">Create a new post</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-error">* {{ $error }}</div>
        @endforeach
    @endif

    <form class="create-post" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form__container">
                <label for="title" class="labels title">Title</label>
                <input type="text" name="title" placeholder="ex: Pastel Mug">
                <label for="description" class="labels desc">Description</label>
                <textarea name="description" id="" cols="40" rows="3" placeholder="ex: I'm selling this [product name] in perfect condition"></textarea>
                <label for="price" class="labels price">Price 円</label>
                <input type="number" name="price" min="2.00" max="1000.00" step="0.01" placeholder="ex: 2.01">
                <label for="file" class="labels img">Image</label>
                <input type="file" name="image" id="file" class="inputfile" accept="image/png, image/jpeg">
                <label for="file" class="upload">Upload an image</label>
            </div>
            <br>
            <div class="form-btn__wrap">
                <button type="submit" class="form-btn btn">Create</button>
            </div>
    </form>
@endsection