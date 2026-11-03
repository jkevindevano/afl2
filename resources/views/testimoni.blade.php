@extends('mainlayout')

@section('title', 'Testimoni | Findora')
@section('description', 'Cerita pelanggan yang sudah berbelanja bersama Findora sejak 2018.')

@section('main_content')

   <<section class="intro-section">

        <span class="eyebrow">WHAT THEY SAY</span>

        <h2>Trusted by <em>Our Customers.</em></h2>

        <p>
            Real stories from customers who shopped with us since 2018.
        </p>

    </section>
    <section class="testimonial-section">
    <div class="testimonial-grid">

        @forelse ($testimonials as $testimonial)
            <div class="testimonial-card">

                <div class="testimonial-avatar">
                    {{ mb_substr($testimonial->name_customer, 0, 1) }}
                </div>

                <h3>{{ $testimonial->name_customer }}</h3>

                <span class="testimonial-quote-mark">&ldquo;</span>
                <p class="testimonial-text">"{{ $testimonial->text }}"</p>
                
                {{-- Pengecekan aman untuk items agar struktur tampilan tetap utuh --}}
                @if (!empty($testimonial->items))
                    <div class="testimonial-items">
                        <span>Items ordered:</span>
                        <div class="testimonial-tags">
                            @foreach ($testimonial->items as $item)
                                <span class="testimonial-tag">{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        @empty
            <p class="testimonial-empty">Customer stories are coming soon.</p>
        @endforelse

    </div>
</section>

@endsection
