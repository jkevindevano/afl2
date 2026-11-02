@extends('mainlayout')

@section('title', 'Contact | Findora')
@section('description', 'Hubungi Findora lewat Instagram untuk info personal shopping dan jasa titip.')

@section('main_content')

    <section id="contact" class="contact-section">

        <span class="eyebrow">LET'S STAY CONNECTED</span>

        <h2>Find Something <em>You Love?</em></h2>

        <p>
            Stay connected with Findora and discover
            our latest updates on Instagram.
        </p>

        <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary">
            Visit Our Instagram
        </a>

    </section>

@endsection
