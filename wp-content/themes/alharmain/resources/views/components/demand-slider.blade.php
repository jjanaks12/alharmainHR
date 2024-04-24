<section class="demand__section">
    <div class="container">
        <header class="demand__section__header">
            <em class="subheading">Announcement</em>
            <h2>Let’s check new demands</h2>
        </header>
        @if(count($demands) > 0)
        <div class="demand__slider swiper">
            <div class="swiper-wrapper">
                @foreach($demands as $demand)
                <a href="{{ $demand['image'] }}" class="demand__item swiper-slide" data-fancybox>
                    <figure class="demand__item__image">
                        @if($demand['image'])
                        <img src="{{ $demand['image'] }}" alt="image description">
                        @endif
                    </figure>
                    <div class="demand__item__description">
                        <h3>{{$demand['title']}}</h3>
                        <div class="demand__item__meta">
                            <time datetime="2023-05-04">{{$demand['expiry']}}</time>
                            <em>{{$demand['country']}}</em>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
        <div class="demand__section__action">
            <a href="#" class="btn btn__secondary btn--outline">Worker Supply and Recruitment Procedures</a>
            <a href="#" class="btn btn__secondary btn--outline">Essential Documentation: Your Complete Guide</a>
        </div>
    </div>
</section>
