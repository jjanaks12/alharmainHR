{{--
Template Name: Test page
--}}

@extends('layouts.app')

@section('content')
<div class="hero__banner">
    <div class="hero__banner__content">
        <div class="holder">
            <em>overview about us</em>
            <h1>We are a premier manpower recruitment company based in Kathmandu, Nepal.</h1>
            <p>The company has serviced many employers in various fields of discipline and specializes mainly in the
                recruitment of <strong>skilled, semi-skilled, and professional manpower</strong>. Today, the company is
                relied upon by some of the world's most reputable companies to assist them with their manpower needs. At
                Al Harmain HR, we see our workforce as a partnership, helping us build strong connections with our
                clients. The philosophy explains why alharmain.com.np has managed to retain some of the clients it
                acquired at the beginning of its operations.</p>
        </div>
    </div>
    <figure class="hero__banner__image">
        <img src="@asset('images/about_img01.jpg')" alt="overview  about us">
    </figure>
</div>
<section class="company__responsibility__section">
    <header class="company__responsibility__header">
        <h2>Company’s Responsibilities</h2>
    </header>
    <div class="company__responsibility__body">
        <ol class="check__list">
            <li>Obtain recruitment permission from Govt. of Nepal, Ministry of labor.</li>
            <li>Advertise the demand in the national newspaper to collect the candidates.</li>
            <li>Conduct interview by the representative of the employer.</li>
            <li>Obtain passports of the selected candidates with required documents.</li>
            <li>Stamping of the visa from respective embassy.</li>
            <li>Obtain immigration clearance from the department of labor.</li>
            <li>Arrange the ticket and inform to the employer about the flight schedule of candidates.</li>
            <li>Properly briefing the workers about the social, political, legal, cultural, and environmental
                aspects of the host country.</li>
            <li>Handover the copy of the employment contract to the candidates.</li>
            <li>Contact employer to solve any problem of employees which may arise during the period of contract
            </li>
        </ol>
    </div>
</section>
<article class="vision__section">
    <em class="subheading">mission, vision and values</em>
    <h2>Our Mission is to provide the best resourcing solutions through fully understanding, communicating and meeting the needs of our clients, candidates and colleagues.</h2>
    <figure class="vision__image">
        <img src="@asset('images/about_img02.jpg')" alt="image description">
    </figure>
</article>
<article class="info__block">
    <figure class="info__block__image">
        <img src="@asset('images/about_img01.jpg')" alt="overview  about us">
    </figure>
    <div class="info__block__text">
        <em class="subheading">How we work</em>
        <h2>Our Unique Approach to Database Management and Candidate Delivery</h2>
        <p>We differentiate our business by providing a unique blend of strong database management, improved speed,
            and punctuality in candidate delivery. Our consultants adhere to strict corporate guidelines, ensuring
            superior service. We collaborate closely with clients to understand their needs and company culture for
            precise recruitment.</p>
    </div>
</article>
<div class="organization__chart">
    <em class="subheading">organization chart</em>
    <h2>Our team is ready to meet our Client's staffing needs.</h2>
    <figure class="organization__chart__image">
        <img src="@asset('images/about_img04.jpg')" alt="overview  about us">
    </figure>
</div>
@endsection
