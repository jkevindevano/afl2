@extends('mainlayout')

@section('title', 'Product | Findora')
@section('description', 'Lihat koleksi terbaru Findora melalui Instagram resmi kami.')

@section('main_content')

    <section class="intro-section">

        <span class="eyebrow">FINDORA COLLECTION</span>

        <h2>Discover <em>Our Products.</em></h2>

        <p>
            Visit our Instagram for the latest collection
            and personal shopping updates.
        </p>

        <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary">
            Visit Our Instagram
        </a>

    </section>

    <section class="product-section">

    <div class="product-grid">
        @foreach ($products as $product)
            <div class="product-card">

                <div class="product-image">
                    <img src="{{ asset('mydesign/images/' . $product['image']) }}"
                         alt="{{ $product['name'] }}">
                </div>

                <div class="product-info">
                    <span class="product-category">{{ $product['category'] }}</span>
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['description'] }}</p>

                    <a href="https://wa.me/447413298891?text={{ rawurlencode('Halo Kak Evaa, saya mau tanya tentang ' . $product['name']) }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="product-link">
                        Ask via WhatsApp
                    </a>
                </div>

            </div>
        @endforeach
    </div>

    <p class="product-note">
        Can't find what you're looking for? We take orders by request.
        See our latest finds on
        <a href="https://www.instagram.com/jastip_byevaa/" target="_blank" rel="noopener noreferrer">Instagram</a>.
    </p>

</section>

@endsection
