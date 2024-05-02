{{--
Template Name: Home page
--}}

@extends('layouts.app')

@section('content')
<div class="banner swiper">
    <figure class="banner__image">
        <img src="@asset('images/home_img_01.png')" alt="image description">
    </figure>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="banner__caption">
                <div class="container">
                    <div class="text__holder">
                        <em>Professional Manpower Recruitment Agency based in Nepal</em>
                        <h1>We are here to provide you with high-quality and experienced manpower to meet your staffing needs.</h1>
                        <div class="btn__holder">
                            <a href="#" class="btn btn__secondary">Explore More</a>
                            <a href="#" class="btn btn__default btn--icon"><span class="icon-play"></span></a>
                        </div>
                    </div>
                    <div class="banner__action">
                        <span>Explore More</span>
                        <strong>Malayasia</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="banner__caption">
                <div class="container">
                    <div class="text__holder">
                        <em>Professional Manpower Recruitment</em>
                        <h1>We are here to provide</h1>
                        <div class="btn__holder">
                            <a href="#" class="btn btn__secondary">Explore More</a>
                            <a href="#" class="btn btn__default btn--icon"><span class="icon-play"></span></a>
                        </div>
                    </div>
                    <div class="banner__action">
                        <span>Explore More</span>
                        <strong>Dubai</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-control">
        <div class="swiper-pagination"></div>
    </div>
</div>
<article class="category__info">
    <div class="container">
        <figure class="category__info__image">
            <img src="@asset('/images/home_img_02.png')" alt="image description">
        </figure>
        <div class="category__info__description">
            <em class="subheading">Workforce Solutions Hub</em>
            <h2>Facilitated the successfully engaged over 10,000 workers across various industries and Sectors.</h2>
            <div class="text">
                <p>We specialize in providing a wide range of Nepalese workforce solutions tailored to meet diverse international demands. Our offerings include skilled, semi-skilled, and professional manpower, ensuring employers find the right fit for their specific requirements abroad.</p>
            </div>
            <a href="#" class="btn btn__secondary">View All Categories</a>
        </div>
    </div>
</article>
<x-demand-slider />
<section class="stats__section">
    <header class="stats__section__header">
        <div class="container">
            <h2>trustable Manpower recruitement Agency, why?</h2>
            <div class="stats__list">
                <div class="stats__list__item">
                    <em class="counter">5+</em>
                    <strong>Years Of Experience</strong>
                </div>
                <div class="stats__list__item">
                    <em class="counter">489+</em>
                    <strong>Valuable Clients</strong>
                </div>
                <div class="stats__list__item">
                    <em class="counter">8,000+</em>
                    <strong>Deployed Candidates</strong>
                </div>
            </div>
        </div>
    </header>
    <div class="stats__section__body">
        <div class="container">
            <ul class="check__list">
                <li>To continue to be a caring employer striving to provide a secure future in return for full commitment</li>
                <li>To create an environment where professionalism, friendliness, openness, honesty and mutual support flourish</li>
                <li>To contribute in a positive manner to the Human Resources and Recruitment Industry</li>
                <li>To ensure that the fit between client and candidate meets the requirements of both stakeholders</li>
                <li>Respect and value the input of individuals whether they be employees, candidates or clients</li>
                <li>Respect and understand the cultural values of our clients and candidates</li>
            </ul>
        </div>
    </div>
</section>
<section class="about__section">
    <div class="container">
        <header class="about__header">
            <em class="subheading">Our company’s messages</em>
            <h2>Welcome to <span>Al-Harmain H.R.</span></h2>
            <a href="{!! wp_get_attachment_url($company_profile) !!}" class="btn btn__secondary" download><span class="icon-download"></span> Company Profile</a>
        </header>
        <div class="team__list">
            @foreach($profils as $profile)
            <a class="team" href="{{ $profile['link'] }}">
                <figure class="team__image">
                    <img src="{{ $profile['image'] }}" alt="image description">
                </figure>
                <div class="team__detail">
                    <h3>{{ $profile['name'] }}</h3>
                    <em>{{ $profile['designation'] }}</em>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<x-partner />
<div class="container">
    <div class="document">
        <div class="document__group">
            <div class="image variant-1">
                <a data-fancybox="Vefified Legal Documents" href="@asset('/images/home_img_06.png')"><img src="@asset('/images/home_img_06.png')" alt="image description"></a>
                <a data-fancybox="Vefified Legal Documents" href="@asset('/images/home_img_06.png')"></a>
            </div>
            <strong class="title">Verified Legal Documents</strong>
        </div>
        <div class="document__group">
            <div class="image variant-2">
                <a data-fancybox="Demand Letter Samples" href="@asset('/images/home_img_07.png')"><img src="@asset('/images/home_img_07.png')" alt="image description"></a>
                <a data-fancybox="Demand Letter Samples" href="@asset('/images/home_img_07.png')"></a>
            </div>
            <strong class="title">Demand Letter Samples</strong>
        </div>
    </div>
</div>
@endsection
