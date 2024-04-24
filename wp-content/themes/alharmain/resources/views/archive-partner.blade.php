{{--
Template Name: Partner page
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container">
    <div class="">
        @while(have_posts())
        @php
        the_post()
        @endphp
        <div>
            @php(the_title())
            @php(the_content())
        </div>
        @endwhile
    </div>
</div>
@endsection
