<header>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" {{ Route::currentRouteName() == 'home' }} href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" {{ Route::currentRouteName() == 'favourite' }}
                href="{{ route('favourite') }}">Favourite</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" {{ Route::currentRouteName() == 'dislike' }} href="{{ route('dislike') }}">Dislike</a>
        </li>
    </ul>
</header>
