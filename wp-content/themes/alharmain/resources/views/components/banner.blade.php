<section class="swiper banner__section">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
        <div class="swiper-slide">
            <figure class="banner__image">
                <img src="{{ $banner['image'] }}">
            </figure>
            <div class="banner__caption">
                <h1>{{ $banner['title'] }}</h1>
                <p>{{ $banner['excerpt'] }}</p>
                {{-- <a href="{{ $banner['url'] }}">view more</a> --}}
                <a href="{{ $banner['video'] }}">play</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
