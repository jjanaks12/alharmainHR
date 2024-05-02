@php
$category = get_the_category(get_the_ID())[0];

$related_posts = get_posts(array(
'category_name' => $category->name,
'posts_per_page' => 2,
));

@endphp

@if($category->name == "profiling")
<section class="profile__section">
    <header class="profile__header">
        <div class="container">
            <ul class="related__posts">
                @foreach($related_posts as $post)
                <li class="{{get_the_ID() == $post->ID ? 'active' : ''}}">
                    <a href="{{ get_permalink($post->ID) }}">
                        <span>Message from</span>
                        <strong>{{ get_field('designation', $post->ID) }}</strong>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="profile__content">
            <div class="profile__image__holder">
                <figure class="profile__image">
                    <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_field('name') }}">
                </figure>
                <strong class="name">{{ get_field('name') }}</strong>
                <em>{{ get_field('designation') }}</em>
            </div>
            <div class="profile__description">
                <h1>{{ get_the_title() }}</h1>
                <div class="text__holder">
                    @php(the_content())
                </div>
            </div>
        </div>
    </div>
</section>
@else
<article @php(post_class('h-entry'))>
    <header class="page-header">
        <div class="container">
            <h1 class="p-name">
                {!! $title !!}
            </h1>
            @include('partials.entry-meta')
        </div>
    </header>
    <div class="container">
        <div class="e-content">
            @php(the_content())
        </div>

        @if ($pagination)
        <footer>
            <nav class="page-nav" aria-label="Page">
                {!! $pagination !!}
            </nav>
        </footer>
        @endif
        @php(comments_template())
    </div>
</article>
@endif
