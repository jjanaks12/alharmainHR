<footer id="footer">
    <div class="container">
        <div class="footer__navigation">
            <div class="footer__block">
                <div class="logo">
                    <a href="{{ home_url('/') }}">
                        {!! wp_get_attachment_image($siteLogo, 'full') !!}
                    </a>
                </div>
                <em class="email"><a href="mailto:{{ $siteEmail }}">{{ $siteEmail }}</a></em>
                <address>{{ $siteAddress }}</address>
                <span>{{ $sitePhone }}</span>
                <ul class="social__link">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Whatsapp</a></li>
                </ul>
            </div>
            <nav class="footer__nav">
                <h3>Company</h3>
                <ul class="footer-two-cols">
                    <li><a href="#">Introduction</a></li>
                    <li><a href="#">Message from chairman</a></li>
                    <li><a href="#">Message from directors</a></li>
                    <li><a href="#">Business developement manager</a></li>
                    <li><a href="#">Organization chart</a></li>
                    <li><a href="#">Legal documents</a></li>
                </ul>
            </nav>
            <nav class="footer__nav">
                <h3>Requirements</h3>
                <ul>
                    <li><a href="#">Recruitments Process</a></li>
                    <li><a href="#">Required documents</a></li>
                    <li><a href="#">Terms & Documents</a></li>
                </ul>
            </nav>
            <nav class="footer__nav">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Demand Sample</a></li>
                    <li><a href="#">Our Clients</a></li>
                    <li><a href="#">About Nepal</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <div class="footer__bar">
        <div class="container">
            <span class="copyright">copyright &copy; <a href="<?php home_url('/') ?>">AL Harmain H.R. Pvt. Ltd.</a> 2024</span>
        </div>
    </div>
</footer>
