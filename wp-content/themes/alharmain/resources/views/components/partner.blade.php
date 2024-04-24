<div class="container">
    <section class="partner__section">
        <h2>We take pride in our reputation as a trusted partner for recruitment solutions.</h2>
        @if($count > 0)
        <div class="partner__list">
            @foreach($partners as $partner)
            <div class="partner__logo">
                @if(!$partner['company_url'])
                <figure title="{{$partner['title']}}">
                    @if($partner['image'])
                    {!!wp_get_attachment_image($partner['image'], 'full')!!}
                    @else
                    <span>{{$partner['title']}}</span>
                    @endif
                </figure>
                @else
                <a href="{{ $partner['company_url'] ? $partner['company_url'] : '#' }}" target="_blank" title="{{$partner['title']}}">
                    @if($partner['image'])
                    {!!wp_get_attachment_image($partner['image'], 'full')!!}
                    @else
                    <span>{{$partner['title']}}</span>
                    @endif
                </a>
                @endif
            </div>
            @endforeach
            <div class="partner__logo">
                <a href="{{ home_url('/partners') }}">
                    <span class="counter">+ {{$count}}</span>
                </a>
            </div>
        </div>
        @endif
    </section>
</div>
