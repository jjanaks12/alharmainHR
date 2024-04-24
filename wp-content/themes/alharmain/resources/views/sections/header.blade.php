<header id="header">
    <div class="container">
        <div class="logo">
            <a href="{{ home_url('/') }}">
                <h1><strong>Al-Harmain</strong> Human Reource Pvt. Ltd.</h1>
            </a>
        </div>
        <a href="#" class="btn btn__default btn--icon nav__opener"><span class="icon-burger-menu"></span></a>
        <nav id="nav">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav__main', 'echo' => false]) !!}
            @endif
            @if (has_nav_menu('support_navigation'))
            {!! wp_nav_menu(['theme_location' => 'support_navigation', 'menu_class' => 'nav__supports', 'echo' => false]) !!}
            @endif
        </nav>
    </div>
</header>
