<nav class="navbar">
    
    <a href="{{ route('home') }}" class="logo">
        findora<span>.</span>
    </a>

    <div class="nav-links">

        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    

        <a href="{{ route('product') }}" class="{{ request()->routeIs('product') ? 'active' : '' }}">Product</a>

        <a href="{{ route('testimoni') }}" class="{{ request()->routeIs('testimoni') ? 'active' : '' }}">
            Testimoni
        </a>

        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </div>

    <a href="https://www.instagram.com/jastip_byevaa/"
       target="_blank"
       rel="noopener noreferrer"
       class="nav-contact">
        Instagram
    </a>

</nav>