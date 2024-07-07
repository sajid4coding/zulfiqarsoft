@extends('layouts.frontendmaster')
@section('frontend_content')
    <!-- Start Hero -->
    <div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" data-src="{{ asset('frontend_assets') }}/img/hero_bg.jpeg" id="home">
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="container">
        <div class="cs-hero_text">
            <h1 class="cs-hero_title wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s"> Creativity In <br />Our Blood Line </h1>
            <div class="cs-hero_info">
            <div>
                <a href="{{ route('contact') }}" class="cs-text_btn">
                <span>Get a Quote</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                </svg>
                </a>
            </div>
            <div>
                <div class="cs-hero_subtitle"> We deliver best problem solving solution for our client and provide finest finishing product in present and upcoming future. </div>
            </div>
            </div>
        </div>
        </div>
        @if ($follow_us->status == 'visible')
            <div class="cs-hero_social_wrap cs-primary_font cs-primary_color">
            <div class="cs-hero_social_title">Follow Us</div>
            <ul class="cs-hero_social_links">
                @if ($follow_us->facebook)
                    <li>
                        <a href="https://facebook.com/{{ $follow_us->facebook }}">Facebook</a>
                    </li>
                @endif
                @if ($follow_us->linkedin)
                    <li>
                        <a href="https://www.linkedin.com/company/{{ $follow_us->linkedin }}">Linkedin</a>
                    </li>
                @endif
            </ul>
            </div>
        @endif
        <a href="#service" class="cs-down_btn"></a>
    </div>
    <!-- End Hero -->

    <!-- Start FunFact -->
    <x-frontend.funfact.funfact />
    <!-- End FunFact -->

    <!-- Start Service Section -->
    <x-frontend.service.service/>
    <!-- End Service Section -->

    <!-- Start Latest Project -->
    @if ($portfolio_exist)
        <x-frontend.portfolio.portfolio/>
    @endif
    <!-- End Latest Project -->

    <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start Awards Text -->
    {{-- <x-frontend.awards.awards/> --}}
    <!-- End Awards Text -->

    <div class="cs-height_130 cs-height_lg_70"></div>

    <!-- Start General Text -->
    <div class="container">
        <h2 class="cs-font_50 cs-m0 text-center cs-line_height_4 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat. </h2>
    </div>
    <!-- End General Text -->

    <div class="cs-height_70 cs-height_lg_70"></div>

    <!-- Start Video Block -->
    <x-frontend.video.video/>
    <!-- End Video Block -->

    <div class="cs-height_145 cs-height_lg_80"></div>

    <!-- Start Team Section -->
    <x-frontend.team.team/>
    <!-- End Team Section -->

    <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start Testimonial Section -->
    @if ($tesimonial_exist)
        <x-frontend.testimonial.testimonial/>
    @endif
    <!-- End Testimonial Section -->

    <!-- Start Blog Section -->
    @if ($blog_exist)
        <x-frontend.blog.blog/>
    @endif
    <!-- End Blog Section -->

    <!-- End Moving Text -->
    <!-- Start Company Logo -->
    @if ($companylogo_exist)
        <x-frontend.companylogo.companylogo/>
    @endif
    <!-- End Company Logo -->

    <div class="cs-height_130 cs-height_lg_70"></div>
    <!-- Start CTA -->
    <x-frontend.contact.contact />
    <!-- End CTA -->
@endsection
