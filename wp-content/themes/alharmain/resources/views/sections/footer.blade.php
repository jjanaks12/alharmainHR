<footer id="footer">
    <div class="container">
        <div class="license">
            <strong>Govt. Lic. No.</strong>
            <em>{{$siteLicenceNo}}</em>
        </div>
        <div class="footer__navigation">
            <div class="footer__block">
                <h3>COMPANY DETAILS</h3>
                <dl>
                    <dt class="sr-only">address</dt>
                    <dd>
                        <address>{{ $siteAddress }}</address>
                    </dd>
                    <dt><span class="icon-phone"></span></dt>
                    <dd><span>{{ $sitePhone }}</span></dd>
                    <dt><span class="icon-envelope"></span></dt>
                    <dd><a href="mailto:{{ $siteEmail }}">{{ $siteEmail }}</a></dd>
                </dl>
            </div>
            <nav class="footer__nav flex--grow">
                <h3>Registration & License</h3>
                @if (has_nav_menu('registration_navigation'))
                {!! wp_nav_menu(['theme_location' => 'registration_navigation', 'echo' => false]) !!}
                @endif
            </nav>
        </div>

    </div>
    <div class="footer__bar">
        <div class="container">
            <span class="copyright">Copyright &copy; {{ $siteYear }} <a href="<?php home_url('/') ?>">AL-Harmain H.R.</a> All rights reserved.</span>
            <span class="credit">Power by <a href="http://www.pikdesigns.com" target="_blank">Pikdesigns</a></span>
        </div>
    </div>
</footer>
