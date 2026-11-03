@extends('mainlayout')

@section('main_content')

<section class="hero">

    <div class="hero-content">

        <span class="eyebrow">
            WELCOME TO FINDORA
        </span>

        <h1>
            Discover More,<br>
            <em>Shop Easier.</em>
        </h1>

        <p>
            Findora brings your favorite finds closer to you.
            Explore our personal shopping service and
            discover a simpler way to shop.
        </p>

        <div class="hero-buttons">

            <a href="#about" class="btn-primary">
                Explore Findora
            </a>

            <a href="#how-it-works" class="btn-secondary">
                How It Works
            </a>

        </div>

        <div class="hero-note">
            PERSONAL SHOPPING & JASA TITIP
        </div>

    </div>

    <div class="hero-image">

        <img src="{{ asset('mydesign/images/hero.jpg') }}"
             alt="Findora Personal Shopping">

        <div class="hero-image-label">
            <span>FINDORA</span>
            <strong>Discover Your Favorites</strong>
        </div>

    </div>

</section>


<section class="intro-section">

    <span class="eyebrow">
        THE FINDORA EXPERIENCE
    </span>

    <h2>
        Little finds,<br>
        <em>lovely discoveries.</em>
    </h2>

    <p>
        Welcome to Findora, your personal shopping companion.
        Discover a convenient way to explore unique finds
        and learn more about our jasa titip service.
    </p>

</section>



<section id="about" class="about-section">

    <div class="about-image">

        <img src="{{ asset('mydesign/images/about.jpg') }}"
             alt="About Findora">

    </div>

    <div class="about-content">

        <span class="eyebrow">
            GET TO KNOW US
        </span>

        <h2>
            A Little About<br>
            <em>Findora.</em>
        </h2>

        <p>
            Findora is a personal shopping and jasa titip
            brand that helps customers discover products
            from various shopping collections.
        </p>

        <p>
            We believe shopping should be simple and enjoyable.
            Through Findora, customers can explore different
            shopping opportunities and stay connected with
            our latest updates.
        </p>

        <a href="https://www.instagram.com/jastip_byevaa/"
           target="_blank"
           rel="noopener noreferrer"
           class="text-link">
            Visit Our Instagram
        </a>

    </div>

</section>



<section id="how-it-works" class="steps-section">

    <div class="steps-heading">

        <span class="eyebrow">
            YOUR SHOPPING JOURNEY
        </span>

        <h2>
            How <em>Findora</em> Works
        </h2>

        <p>
            Discover how to get information about
            our personal shopping service.
        </p>

    </div>

    <div class="steps-grid">

        <div class="step-card">

            <span class="step-number">01</span>

            <h3>Discover</h3>

            <p>
                Explore Findora and learn about
                our personal shopping service.
            </p>

        </div>

        <div class="step-card">

            <span class="step-number">02</span>

            <h3>Stay Updated</h3>

            <p>
                Follow our Instagram to discover
                the latest collection and jastip information.
            </p>

        </div>

        <div class="step-card">

            <span class="step-number">03</span>

            <h3>Connect</h3>

            <p>
                Contact Findora through our official
                Instagram for further information.
            </p>

        </div>

    </div>

</section>



@endsection