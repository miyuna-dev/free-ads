<ul class="navbar__content">
    <li>
        <a href="{{ route('welcome') }}">
            Home
        </a>
    </li>
    <li>
        <a href="{{ route('posts') }}">
            Articles
        </a>
    </li>
    <li>
        <a href="{{ route('articles.create') }}">
            Create
        </a>
    </li>
    <li>
        <a href="{{ route('register') }}">
            Register
        </a>
    </li>
</ul>

@section('back')
<button onclick="history.back()">Return</a>
@endsection