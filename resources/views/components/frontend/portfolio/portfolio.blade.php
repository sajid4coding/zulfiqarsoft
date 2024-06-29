<section>
    <div class="container">
    <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle">Latest Projects</h3>
        <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Portfolio to explore </h2>
    </div>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="cs-slider cs-style3 cs-gap-24">
    <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="1" data-slides-per-view="1">
        <div class="cs-slider_wrapper">
            <!-- .cs-slide -->
            @foreach ($portfolios as $portfolio)
                <div class="cs-slide">
                    <a href="{{ route('portfolio.details', ['id' => $portfolio->id, 'slug' => $portfolio->portfolio_title_slug]) }}" class="cs-portfolio cs-style1 cs-bg">
                    <div class="cs-portfolio_hover"></div>
                    {{-- <div class="cs-portfolio_bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_1.jpeg"></div> --}}
                    <img class="cs-portfolio_bg" src="@if ($portfolio->portfolio_thumbnail == NULL) {{ asset('nullImage') }}/nullImage.jpg @else {{ asset('storage') }}/portfolio_thumbnail/{{ $portfolio->portfolio_thumbnail }} @endif" alt="">
                    <div class="cs-portfolio_info">
                        <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                        <h2 class="cs-portfolio_title">{{ $portfolio->portfolio_title }}</h2>
                        <div class="cs-portfolio_subtitle">See Details</div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- .cs-slider_container -->
    <div class="cs-pagination cs-style1"></div>
    </div>
    <!-- .cs-slider -->
</section>
