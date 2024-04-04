<header id="header">
    <div class="container">
        <div class="logo">
            <a href="{{ home_url('/') }}">
                <h1>Al-Harmain H.R Pvt. Ltd.</h1>
            </a>
        </div>
        @if (has_nav_menu('primary_navigation'))
        <nav id="nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav__main', 'echo' => false]) !!}
        </nav>
        @endif
    </div>
</header>
