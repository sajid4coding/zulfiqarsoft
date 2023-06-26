@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/about_hero_bg.jpeg">
<div class="container">
    <div class="cs-page_heading_in">
    <h1 class="cs-page_title cs-font_50 cs-white_color">About Us</h1>
    <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item">
        <a href="{{ route('index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">About Us</li>
    </ol>
    </div>
</div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>
<section>
<div class="container">
    <div class="row">
    <div class="col-xl-5 col-lg-7">
        <div class="cs-section_heading cs-style1">
        <h3 class="cs-section_subtitle">About Our Agency</h3>
        <h2 class="cs-section_title"> {{ $about->heading_line }} </h2>
        <div class="cs-height_30 cs-height_lg_20"></div>
        <p class="cs-m0"> {!! $about->about !!} </p>
        <div class="cs-height_30 cs-height_lg_30"></div>
        <div class="cs-separator cs-accent_bg"></div>
        <div class="cs-height_25 cs-height_lg_40"></div>
        </div>
    </div>
    <div class="col-lg-5 offset-xl-2">
        <img src="{{ asset('storage/about_page_images') }}/{{ $about->about_image_1 }}" alt="" class="w-100 cs-radius_15">
        <div class="cs-height_25 cs-height_lg_25"></div>
    </div>
    <div class="col-lg-7">
        <img src="{{ asset('storage/about_page_images') }}/{{ $about->about_image_2 }}" alt="" class="w-100 cs-radius_15">
        <div class="cs-height_25 cs-height_lg_25"></div>
    </div>
    <div class="col-lg-5">
        <img src="{{ asset('storage/about_page_images') }}/{{ $about->about_image_3 }}" alt="" class="w-100 cs-radius_15">
        <div class="cs-height_25 cs-height_lg_25"></div>
    </div>
    </div>
</div>
</section>
<div class="cs-height_75 cs-height_lg_55"></div>
<!-- Start FunFact -->
<section>
<div class="container">
    <div class="cs-funfact_wrap">
    <div class="cs-funfact_shape" data-src="assets/img/funfact_shape_bg.svg"></div>
    <div class="cs-funfact_left">
        <div class="cs-funfact_heading">
        <h2>Our fun fact</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
        </div>
    </div>
    <div class="cs-funfact_right">
        <div class="cs-funfacts">
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
            <span data-count-to="40" class="odometer"></span>K
            </div>
            <div class="cs-funfact_text">
            <span class="cs-accent_color">+</span>
            <p>Global Happy Clients</p>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
            <span data-count-to="50" class="odometer"></span>K
            </div>
            <div class="cs-funfact_text">
            <span class="cs-accent_color">+</span>
            <p>Project Completed</p>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
            <span data-count-to="245" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
            <span class="cs-accent_color">+</span>
            <p>Team Members</p>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
            <span data-count-to="550" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
            <span class="cs-accent_color">+</span>
            <p>Digital products</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!-- End FunFact -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Why Choose -->
<section>
<div class="container">
    <div class="row">
    <div class="col-xl-5 col-lg-6">
        <div class="cs-image_layer cs-style1">
        <div class="cs-image_layer_in">
            <img src="{{ asset('frontend_assets') }}/img/about_img_4.jpeg" alt="Image" class="w-100 cs-radius_15">
        </div>
        </div>
        <div class="cs-height_0 cs-height_lg_40"></div>
    </div>
    <div class="col-xl-5 offset-xl-1 col-lg-6">
        <div class="cs-section_heading cs-style1">
        <h3 class="cs-section_subtitle">Why Choose Us</h3>
        <h2 class="cs-section_title">{{ $whychooseus->team_heading_line }}</h2>
        <div class="cs-height_30 cs-height_lg_20"></div>
        <p class="cs-m0">{!! $whychooseus->about_team !!}</p>
        <div class="cs-height_15 cs-height_lg_15"></div>
        <div class="cs-separator cs-accent_bg"></div>
        <div class="cs-height_25 cs-height_lg_0"></div>
        </div>
    </div>
    </div>
</div>
</section>
<!-- End Why Choose -->
<div class="cs-height_145 cs-height_lg_80"></div>

<!-- Start Team Section -->
<x-frontend.team.team />
<!-- End Team Section -->

<div class="cs-height_150 cs-height_lg_80"></div>

<!-- Start CTA -->
<x-frontend.contact.contact />
<!-- End CTA -->

@endsection
