<section class="partner__section">
    <div class="container">
        <h2>Partners</h2>
        <div class="partner__list">
            @foreach($partners as $partner)
            <div class="partner__logo">
                <a href="{{ $partner['URL'] ? $partner['URL'] : '#' }}" target="_blank">
                    @if($partner['partner_logo'])
                    {!!wp_get_attachment_image($partner['partner_logo'], 'full')!!}
                    @else
                    <span>{{{$partner['Name']}}}</span>
                    @endif
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
