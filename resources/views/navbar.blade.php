<nav class="navbar">

    <a href="{{ route('home') }}" class="logo">
        findora<span>.</span>
    </a>

    <div class="nav-links">
        @foreach (['home' => 'Home', 'product' => 'Product', 'testimoni' => 'Testimoni', 'contact' => 'Contact'] as $name => $label)
            <a href="{{ route($name) }}" @class(['active' => request()->routeIs($name)])>{{ $label }}</a>
        @endforeach
    </div>

    <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="nav-contact">
        Instagram
    </a>

</nav>
