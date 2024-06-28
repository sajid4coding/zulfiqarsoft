@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/blog_details_hero_bg.jpeg">
    <div class="container">
    <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">{{ $page->page_title }}</h1>
        <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item">
            <a href="{{ route('index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">{{ $page->page_title }}</li>
        </ol>
    </div>
    </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Blogs -->
<section>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="cs-post cs-style2">
            <div class="cs-post_info">
                <h2 class="cs-post_title">{{ $page->page_title }}</h2>
                <p><?=$page->page_content?></p>
            </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
    </div>
    {{-- <x-frontend.blog-side-bar.blog-side-bar/> --}}
    </div>
</div>
</section>
<!-- End Blogs -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start CTA -->
<x-frontend.contact.contact/>
<!-- End CTA -->
@endsection
