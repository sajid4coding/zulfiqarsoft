@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Portfolio</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active">Portfolio</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <!-- Start Portfolio -->
  <div class="container">
    <div class="cs-portfolio_1_heading">
      <div class="cs-section_heading cs-style1">
        <h3 class="cs-section_subtitle">Our Portfolio</h3>
        <h2 class="cs-section_title">Some recent work</h2>
      </div>
      <div class="cs-isotop_filter cs-style1">
        <ul class="cs-mp0 cs-center">
          <li class="active"><a href="#" data-filter="*">All</a></li>
          @foreach ($serviceCategories as $serviceCategory)
            <li><a href="#" data-filter=".{{ $serviceCategory->service_category_title=='UI/UX' ? str_replace('/', '_', $serviceCategory->service_category_title) : str_replace(' ', '_', $serviceCategory->service_category_title) }}">{{ $serviceCategory->service_category_title }}</a></li>
          @endforeach
          {{-- <li><a href="#" data-filter=".web_design">Web Design</a></li>
          <li><a href="#" data-filter=".ui_ux_design">UI/UX Design</a></li>
          <li><a href="#" data-filter=".mobile_apps">Mobile Apps</a></li>
          <li><a href="#" data-filter=".logo_design">Logo Design</a></li> --}}
        </ul>
      </div>
    </div>
    <div class="cs-height_90 cs-height_lg_15"></div>
    <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_24">
      <div class="cs-grid_sizer"></div>
      @foreach ($portfolios as $portfolio)
        <div class="cs-isotop_item {{ $portfolio->relationshipwithServiceCategory->service_category_title=='UI/UX' ? str_replace('/', '_', $portfolio->relationshipwithServiceCategory->service_category_title) : str_replace(' ', '_', $portfolio->relationshipwithServiceCategory->service_category_title)}}">
            <a href="{{ route('portfolio.details',$portfolio->id) }}" class="cs-portfolio cs-style1 cs-type1">
              <div class="cs-portfolio_hover"></div>
              <img class="cs-portfolio_bg cs-bg" src="@if ($portfolio->portfolio_thumbnail == NULL) {{ asset('storage') }}/portfolio_thumbnail/nullImage.jpg @else {{ asset('storage') }}/portfolio_thumbnail/{{ $portfolio->portfolio_thumbnail }} @endif" alt="">
              <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                <h2 class="cs-portfolio_title">{{ $portfolio->portfolio_title }}</h2>
                <div class="cs-portfolio_subtitle">See Details</div>
              </div>
            </a>
          </div>
      @endforeach
      {{-- <!-- .cs-isotop_item -->
      <div class="cs-isotop_item logo_design">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_5.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item -->
      <div class="cs-isotop_item web_design">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_6.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item -->
      <div class="cs-isotop_item cs-w66 mobile_apps">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_7.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item -->
      <div class="cs-isotop_item ui_ux_design">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_8.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item -->
      <div class="cs-isotop_item web_design">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_9.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item -->
      <div class="cs-isotop_item cs-w66 logo_design">
        <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_10.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div><!-- .cs-isotop_item --> --}}
    </div>
    <div class="cs-height_90 cs-height_lg_40"></div>
    {{-- <div class="text-center">
      <a href="#" class="cs-text_btn">
        <span>Load More</span>
        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
        </svg>
      </a>
    </div> --}}
  </div>
<!-- End Portfolio -->
<div class="cs-height_145 cs-height_lg_80"></div>
<!-- Start CTA -->
@if (App\Models\User::find(1)->email && App\Models\User::find(1)->email_status == 'visible')
<section>
<div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1 rounded-0" data-src="{{ asset('frontend_assets') }}/img/cta_bg_2.jpeg" >
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="cs-cta_in">
    <h2 class="cs-cta_title cs-semi_bold cs-m0">{{ App\Models\User::find(1)->email }}</h2>
    </div>
</div>
</section>
@endif
<!-- End CTA -->

@endsection
