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
                <a href="contact.html" class="cs-text_btn">
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
                @if ($follow_us->twitter)
                    <li>
                        <a href="https://twitter.com/{{ $follow_us->twitter }}">Twitter</a>
                    </li>
                @endif
                @if ($follow_us->instagram)
                    <li>
                        <a href="https://www.instagram.com/{{ $follow_us->instagram }}">Instagram</a>
                    </li>
                @endif
            </ul>
            </div>
        @endif
        <a href="#service" class="cs-down_btn"></a>
    </div>
    <!-- End Hero -->
    <!-- Start FunFact -->
    <section>
        <div class="container">
        <div class="cs-funfact_wrap cs-type1">
            <div class="cs-funfact_shape" data-src="{{ asset('frontend_assets') }}/img/funfact_shape_bg.svg"></div>
            <div class="cs-funfact_left">
            <div class="cs-funfact_heading">
                <h2>Our fun fact</h2>
                <p> Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
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
    <!-- Start Service Section -->
    <section id="service">
        <div class="cs-height_150 cs-height_lg_80"></div>
        <div class="container">
        <div class="row">
            <div class="col-xl-4">
            <div class="cs-section_heading cs-style1">
                <h3 class="cs-section_subtitle">What Can We Do</h3>
                <h2 class="cs-section_title">Services we can help you with</h2>
                <div class="cs-height_45 cs-height_lg_20"></div>
                <a href="service.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <span>See All Services</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                </svg>
                </a>
            </div>
            <div class="cs-height_90 cs-height_lg_45"></div>
            </div>
            <div class="col-xl-8">
            <div class="row">
                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                    <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="{{ asset('frontend_assets') }}/img/service_1.jpeg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                        <span class="cs-hover_layer3 cs-accent_bg"></span>
                        <h2 class="cs-card_title">UI/UX design</h2>
                    </div>
                    </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                    <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="{{ asset('frontend_assets') }}/img/service_2.jpeg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                        <span class="cs-hover_layer3 cs-accent_bg"></span>
                        <h2 class="cs-card_title">React.js Development</h2>
                    </div>
                    </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                    <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="{{ asset('frontend_assets') }}/img/service_3.jpeg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                        <span class="cs-hover_layer3 cs-accent_bg"></span>
                        <h2 class="cs-card_title">Digital Marketing</h2>
                    </div>
                    </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                    <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="{{ asset('frontend_assets') }}/img/service_4.jpeg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                        <span class="cs-hover_layer3 cs-accent_bg"></span>
                        <h2 class="cs-card_title">Technology</h2>
                    </div>
                    </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            </div>
            </div>
        </div>
        </div>
        <div class="cs-height_150 cs-height_lg_50"></div>
    </section>
    <!-- End Service Section -->
    <!-- Start Latest Project -->
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
            <div class="cs-slide">
                <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                <div class="cs-portfolio_hover"></div>
                <div class="cs-portfolio_bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_1.jpeg"></div>
                <div class="cs-portfolio_info">
                    <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                    <h2 class="cs-portfolio_title">Colorful Art Work</h2>
                    <div class="cs-portfolio_subtitle">See Details</div>
                </div>
                </a>
            </div>
            <!-- .cs-slide -->
            <div class="cs-slide">
                <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                <div class="cs-portfolio_hover"></div>
                <div class="cs-portfolio_bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_2.jpeg"></div>
                <div class="cs-portfolio_info">
                    <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                    <h2 class="cs-portfolio_title">Colorful Art Work</h2>
                    <div class="cs-portfolio_subtitle">See Details</div>
                </div>
                </a>
            </div>
            <!-- .cs-slide -->
            <div class="cs-slide">
                <a href="portfolio-details.html" class="cs-portfolio cs-style1 cs-bg">
                <div class="cs-portfolio_hover"></div>
                <div class="cs-portfolio_bg" data-src="{{ asset('frontend_assets') }}/img/portfolio_3.jpeg"></div>
                <div class="cs-portfolio_info">
                    <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                    <h2 class="cs-portfolio_title">Colorful Art Work</h2>
                    <div class="cs-portfolio_subtitle">See Details</div>
                </div>
                </a>
            </div>
            <!-- .cs-slide -->
            </div>
        </div>
        <!-- .cs-slider_container -->
        <div class="cs-pagination cs-style1"></div>
        </div>
        <!-- .cs-slider -->
    </section>
    <!-- End Latest Project -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start Awards Text -->
    <section class="cs-shape_wrap_2">
        <div class="cs-shape_2">
        <div></div>
        </div>
        <div class="container">
        <div class="cs-slider cs-style1 cs-gap-24">
            <div class="cs-slider_left">
            <div class="cs-section_heading cs-style1">
                <h3 class="cs-section_subtitle wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our Awards </h3>
                <h2 class="cs-section_title">We get multiple awards</h2>
            </div>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <div class="cs-slider_arrows cs-style1 cs-primary_color">
                <div class="cs-left_arrow cs-center">
                <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.469791 5.96967C0.176899 6.26256 0.176899 6.73744 0.469791 7.03033L5.24276 11.8033C5.53566 12.0962 6.01053 12.0962 6.30342 11.8033C6.59632 11.5104 6.59632 11.0355 6.30342 10.7426L2.06078 6.5L6.30342 2.25736C6.59632 1.96447 6.59632 1.48959 6.30342 1.1967C6.01053 0.903806 5.53566 0.903806 5.24276 1.1967L0.469791 5.96967ZM26.0001 5.75L1.00012 5.75V7.25L26.0001 7.25V5.75Z" fill="currentColor" />
                </svg>
                </div>
                <div class="cs-right_arrow cs-center">
                <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5305 7.03033C25.8233 6.73744 25.8233 6.26256 25.5305 5.96967L20.7575 1.1967C20.4646 0.903806 19.9897 0.903806 19.6968 1.1967C19.4039 1.48959 19.4039 1.96447 19.6968 2.25736L23.9395 6.5L19.6968 10.7426C19.4039 11.0355 19.4039 11.5104 19.6968 11.8033C19.9897 12.0962 20.4646 12.0962 20.7575 11.8033L25.5305 7.03033ZM0.00012207 7.25H25.0001V5.75H0.00012207V7.25Z" fill="currentColor" />
                </svg>
                </div>
            </div>
            </div>
            <div class="cs-slider_right">
            <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="2">
                <div class="cs-slider_wrapper">
                <div class="cs-slide">
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2019</h3>
                    <h2>Google awards</h2>
                    <p>Website of the day</p>
                    <p>Mobile exelence</p>
                    </div>
                    <div class="cs-height_40 cs-height_lg_30"></div>
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2021</h3>
                    <h2>CSS awards design</h2>
                    <p>Honorable mention</p>
                    <p>Desktop exelence</p>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2020</h3>
                    <h2>New technology innovation</h2>
                    <p>Honorable mention</p>
                    <p>Desktop exelence</p>
                    </div>
                    <div class="cs-height_40 cs-height_lg_30"></div>
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2022</h3>
                    <h2>UI/UX design of the month</h2>
                    <p>Website of the day</p>
                    <p>Mobile exelence</p>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2019</h3>
                    <h2>Google awards</h2>
                    <p>Website of the day</p>
                    <p>Mobile exelence</p>
                    </div>
                    <div class="cs-height_40 cs-height_lg_30"></div>
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2021</h3>
                    <h2>CSS awards design</h2>
                    <p>Honorable mention</p>
                    <p>Desktop exelence</p>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2020</h3>
                    <h2>New technology innovation</h2>
                    <p>Honorable mention</p>
                    <p>Desktop exelence</p>
                    </div>
                    <div class="cs-height_40 cs-height_lg_30"></div>
                    <div class="cs-time_line cs-style1">
                    <h3 class="cs-accent_color">2022</h3>
                    <h2>UI/UX design of the month</h2>
                    <p>Website of the day</p>
                    <p>Mobile exelence</p>
                    </div>
                </div>
                <!-- .cs-slide -->
                </div>
            </div>
            <!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
            </div>
        </div>
        <!-- .cs-slider -->
        </div>
    </section>
    <!-- End Awards Text -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <!-- Start General Text -->
    <div class="container">
        <h2 class="cs-font_50 cs-m0 text-center cs-line_height_4 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat. </h2>
    </div>
    <!-- End General Text -->
    <div class="cs-height_70 cs-height_lg_70"></div>
    <!-- Start Video Block -->
    <div class="container">
        <a href="https://www.youtube.com/watch?v=VcaAVWtP48A" class="cs-video_block cs-style1 cs-video_open cs-bg" data-src="{{ asset('frontend_assets') }}/img/video_bg.jpeg">
        <span class="cs-player_btn cs-accent_color">
            <span></span>
        </span>
        </a>
    </div>
    <!-- End Video Block -->
    <div class="cs-height_145 cs-height_lg_80"></div>
    <!-- Start Team Section -->
    <section>
        <div class="container">
        <div class="cs-slider cs-style2 cs-gap-24">
            <div class="cs-slider_heading cs-style1">
            <div class="cs-section_heading cs-style1">
                <h3 class="cs-section_subtitle wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our Team </h3>
                <h2 class="cs-section_title">Awesome team <br />members </h2>
            </div>
            <div class="cs-slider_arrows cs-style1 cs-primary_color">
                <div class="cs-left_arrow cs-center">
                <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.469791 5.96967C0.176899 6.26256 0.176899 6.73744 0.469791 7.03033L5.24276 11.8033C5.53566 12.0962 6.01053 12.0962 6.30342 11.8033C6.59632 11.5104 6.59632 11.0355 6.30342 10.7426L2.06078 6.5L6.30342 2.25736C6.59632 1.96447 6.59632 1.48959 6.30342 1.1967C6.01053 0.903806 5.53566 0.903806 5.24276 1.1967L0.469791 5.96967ZM26.0001 5.75L1.00012 5.75V7.25L26.0001 7.25V5.75Z" fill="currentColor" />
                </svg>
                </div>
                <div class="cs-right_arrow cs-center">
                <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5305 7.03033C25.8233 6.73744 25.8233 6.26256 25.5305 5.96967L20.7575 1.1967C20.4646 0.903806 19.9897 0.903806 19.6968 1.1967C19.4039 1.48959 19.4039 1.96447 19.6968 2.25736L23.9395 6.5L19.6968 10.7426C19.4039 11.0355 19.4039 11.5104 19.6968 11.8033C19.9897 12.0962 20.4646 12.0962 20.7575 11.8033L25.5305 7.03033ZM0.00012207 7.25H25.0001V5.75H0.00012207V7.25Z" fill="currentColor" />
                </svg>
                </div>
            </div>
            </div>
            <div class="cs-height_85 cs-height_lg_45"></div>
            <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
            <div class="cs-slider_wrapper">
                <div class="cs-slide">
                <div class="cs-team cs-style1">
                    <div class="cs-member_thumb">
                    <img src="{{ asset('frontend_assets') }}/img/member_1.jpeg" alt="Member" />
                    <div class="cs-member_overlay"></div>
                    </div>
                    <div class="cs-member_info">
                    <h2 class="cs-member_name">
                        <a href="team-details.html">Melon Bulgery</a>
                    </h2>
                    <div class="cs-member_designation">Product Designer</div>
                    </div>
                    <div class="cs-member_social cs-primary_color">
                    <a href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6204 3.60521C15.631 3.75325 15.631 3.90133 15.631 4.04938C15.631 8.56502 12.194 13.7681 5.91227 13.7681C3.97697 13.7681 2.17918 13.2076 0.666901 12.2347C0.941869 12.2664 1.20623 12.277 1.49177 12.277C3.08862 12.277 4.55861 11.7377 5.73248 10.8176C4.23078 10.7859 2.97231 9.80236 2.53872 8.44871C2.75024 8.48042 2.96173 8.50158 3.18384 8.50158C3.49051 8.50158 3.79722 8.45926 4.08273 8.38527C2.51759 8.06798 1.34369 6.69321 1.34369 5.03288V4.99059C1.79842 5.2444 2.32723 5.40303 2.88768 5.42416C1.96762 4.81078 1.36485 3.76383 1.36485 2.57939C1.36485 1.94488 1.53403 1.36324 1.83015 0.855618C3.51164 2.92838 6.03915 4.282 8.87331 4.43008C8.82045 4.17627 8.78871 3.91191 8.78871 3.64752C8.78871 1.76509 10.3116 0.231689 12.2045 0.231689C13.188 0.231689 14.0764 0.644126 14.7003 1.31037C15.4723 1.16232 16.2126 0.876777 16.8683 0.485499C16.6144 1.27867 16.0751 1.94491 15.3666 2.3679C16.054 2.2939 16.7202 2.10351 17.3336 1.83915C16.8683 2.51594 16.2867 3.11871 15.6204 3.60521V3.60521Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9853 1.97421C16.7936 1.25247 16.2289 0.684051 15.5118 0.491149C14.212 0.140625 9.00023 0.140625 9.00023 0.140625C9.00023 0.140625 3.78845 0.140625 2.48868 0.491149C1.7716 0.684081 1.20685 1.25247 1.01517 1.97421C0.666901 3.28241 0.666901 6.01183 0.666901 6.01183C0.666901 6.01183 0.666901 8.74126 1.01517 10.0495C1.20685 10.7712 1.7716 11.3159 2.48868 11.5088C3.78845 11.8594 9.00023 11.8594 9.00023 11.8594C9.00023 11.8594 14.212 11.8594 15.5118 11.5088C16.2289 11.3159 16.7936 10.7712 16.9853 10.0495C17.3336 8.74126 17.3336 6.01183 17.3336 6.01183C17.3336 6.01183 17.3336 3.28241 16.9853 1.97421ZM7.29568 8.48995V3.53372L11.6517 6.01189L7.29568 8.48995Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16839 11.1987C4.16839 12.1623 3.38119 12.9495 2.41764 12.9495C1.4541 12.9495 0.666901 12.1623 0.666901 11.1987C0.666901 10.2352 1.4541 9.448 2.41764 9.448H4.16839V11.1987ZM5.05083 11.1987C5.05083 10.2352 5.83803 9.448 6.80157 9.448C7.76511 9.448 8.55232 10.2352 8.55232 11.1987V15.5827C8.55232 16.5462 7.76511 17.3334 6.80157 17.3334C5.83803 17.3334 5.05083 16.5462 5.05083 15.5827V11.1987ZM6.80157 4.16824C5.83803 4.16824 5.05083 3.38103 5.05083 2.41749C5.05083 1.45395 5.83803 0.666748 6.80157 0.666748C7.76511 0.666748 8.55232 1.45395 8.55232 2.41749V4.16824H6.80157ZM6.80157 5.05068C7.76511 5.05068 8.55232 5.83788 8.55232 6.80142C8.55232 7.76496 7.76511 8.55217 6.80157 8.55217H2.41764C1.4541 8.55217 0.666901 7.76496 0.666901 6.80142C0.666901 5.83788 1.4541 5.05068 2.41764 5.05068H6.80157ZM13.8321 6.80142C13.8321 5.83788 14.6193 5.05068 15.5828 5.05068C16.5464 5.05068 17.3336 5.83788 17.3336 6.80142C17.3336 7.76496 16.5464 8.55217 15.5828 8.55217H13.8321V6.80142ZM12.9496 6.80142C12.9496 7.76496 12.1624 8.55217 11.1989 8.55217C10.2354 8.55217 9.44815 7.76496 9.44815 6.80142V2.41749C9.44815 1.45395 10.2354 0.666748 11.1989 0.666748C12.1624 0.666748 12.9496 1.45395 12.9496 2.41749V6.80142ZM11.1989 13.8319C12.1624 13.8319 12.9496 14.6191 12.9496 15.5827C12.9496 16.5462 12.1624 17.3334 11.1989 17.3334C10.2354 17.3334 9.44815 16.5462 9.44815 15.5827V13.8319H11.1989ZM11.1989 12.9495C10.2354 12.9495 9.44815 12.1623 9.44815 11.1987C9.44815 10.2352 10.2354 9.448 11.1989 9.448H15.5828C16.5464 9.448 17.3336 10.2352 17.3336 11.1987C17.3336 12.1623 16.5464 12.9495 15.5828 12.9495H11.1989Z" fill="currentColor" />
                        </svg>
                    </a>
                    </div>
                </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                <div class="cs-team cs-style1">
                    <div class="cs-member_thumb">
                    <img src="{{ asset('frontend_assets') }}/img/member_2.jpeg" alt="Member" />
                    <div class="cs-member_overlay"></div>
                    </div>
                    <div class="cs-member_info">
                    <h2 class="cs-member_name">
                        <a href="team-details.html">Olinaz Fushi</a>
                    </h2>
                    <div class="cs-member_designation">Project Manager</div>
                    </div>
                    <div class="cs-member_social cs-primary_color">
                    <a href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6204 3.60521C15.631 3.75325 15.631 3.90133 15.631 4.04938C15.631 8.56502 12.194 13.7681 5.91227 13.7681C3.97697 13.7681 2.17918 13.2076 0.666901 12.2347C0.941869 12.2664 1.20623 12.277 1.49177 12.277C3.08862 12.277 4.55861 11.7377 5.73248 10.8176C4.23078 10.7859 2.97231 9.80236 2.53872 8.44871C2.75024 8.48042 2.96173 8.50158 3.18384 8.50158C3.49051 8.50158 3.79722 8.45926 4.08273 8.38527C2.51759 8.06798 1.34369 6.69321 1.34369 5.03288V4.99059C1.79842 5.2444 2.32723 5.40303 2.88768 5.42416C1.96762 4.81078 1.36485 3.76383 1.36485 2.57939C1.36485 1.94488 1.53403 1.36324 1.83015 0.855618C3.51164 2.92838 6.03915 4.282 8.87331 4.43008C8.82045 4.17627 8.78871 3.91191 8.78871 3.64752C8.78871 1.76509 10.3116 0.231689 12.2045 0.231689C13.188 0.231689 14.0764 0.644126 14.7003 1.31037C15.4723 1.16232 16.2126 0.876777 16.8683 0.485499C16.6144 1.27867 16.0751 1.94491 15.3666 2.3679C16.054 2.2939 16.7202 2.10351 17.3336 1.83915C16.8683 2.51594 16.2867 3.11871 15.6204 3.60521V3.60521Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9853 1.97421C16.7936 1.25247 16.2289 0.684051 15.5118 0.491149C14.212 0.140625 9.00023 0.140625 9.00023 0.140625C9.00023 0.140625 3.78845 0.140625 2.48868 0.491149C1.7716 0.684081 1.20685 1.25247 1.01517 1.97421C0.666901 3.28241 0.666901 6.01183 0.666901 6.01183C0.666901 6.01183 0.666901 8.74126 1.01517 10.0495C1.20685 10.7712 1.7716 11.3159 2.48868 11.5088C3.78845 11.8594 9.00023 11.8594 9.00023 11.8594C9.00023 11.8594 14.212 11.8594 15.5118 11.5088C16.2289 11.3159 16.7936 10.7712 16.9853 10.0495C17.3336 8.74126 17.3336 6.01183 17.3336 6.01183C17.3336 6.01183 17.3336 3.28241 16.9853 1.97421ZM7.29568 8.48995V3.53372L11.6517 6.01189L7.29568 8.48995Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16839 11.1987C4.16839 12.1623 3.38119 12.9495 2.41764 12.9495C1.4541 12.9495 0.666901 12.1623 0.666901 11.1987C0.666901 10.2352 1.4541 9.448 2.41764 9.448H4.16839V11.1987ZM5.05083 11.1987C5.05083 10.2352 5.83803 9.448 6.80157 9.448C7.76511 9.448 8.55232 10.2352 8.55232 11.1987V15.5827C8.55232 16.5462 7.76511 17.3334 6.80157 17.3334C5.83803 17.3334 5.05083 16.5462 5.05083 15.5827V11.1987ZM6.80157 4.16824C5.83803 4.16824 5.05083 3.38103 5.05083 2.41749C5.05083 1.45395 5.83803 0.666748 6.80157 0.666748C7.76511 0.666748 8.55232 1.45395 8.55232 2.41749V4.16824H6.80157ZM6.80157 5.05068C7.76511 5.05068 8.55232 5.83788 8.55232 6.80142C8.55232 7.76496 7.76511 8.55217 6.80157 8.55217H2.41764C1.4541 8.55217 0.666901 7.76496 0.666901 6.80142C0.666901 5.83788 1.4541 5.05068 2.41764 5.05068H6.80157ZM13.8321 6.80142C13.8321 5.83788 14.6193 5.05068 15.5828 5.05068C16.5464 5.05068 17.3336 5.83788 17.3336 6.80142C17.3336 7.76496 16.5464 8.55217 15.5828 8.55217H13.8321V6.80142ZM12.9496 6.80142C12.9496 7.76496 12.1624 8.55217 11.1989 8.55217C10.2354 8.55217 9.44815 7.76496 9.44815 6.80142V2.41749C9.44815 1.45395 10.2354 0.666748 11.1989 0.666748C12.1624 0.666748 12.9496 1.45395 12.9496 2.41749V6.80142ZM11.1989 13.8319C12.1624 13.8319 12.9496 14.6191 12.9496 15.5827C12.9496 16.5462 12.1624 17.3334 11.1989 17.3334C10.2354 17.3334 9.44815 16.5462 9.44815 15.5827V13.8319H11.1989ZM11.1989 12.9495C10.2354 12.9495 9.44815 12.1623 9.44815 11.1987C9.44815 10.2352 10.2354 9.448 11.1989 9.448H15.5828C16.5464 9.448 17.3336 10.2352 17.3336 11.1987C17.3336 12.1623 16.5464 12.9495 15.5828 12.9495H11.1989Z" fill="currentColor" />
                        </svg>
                    </a>
                    </div>
                </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                <div class="cs-team cs-style1">
                    <div class="cs-member_thumb">
                    <img src="{{ asset('frontend_assets') }}/img/member_3.jpeg" alt="Member" />
                    <div class="cs-member_overlay"></div>
                    </div>
                    <div class="cs-member_info">
                    <h2 class="cs-member_name">
                        <a href="team-details.html">David Elone</a>
                    </h2>
                    <div class="cs-member_designation">React Developer</div>
                    </div>
                    <div class="cs-member_social cs-primary_color">
                    <a href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6204 3.60521C15.631 3.75325 15.631 3.90133 15.631 4.04938C15.631 8.56502 12.194 13.7681 5.91227 13.7681C3.97697 13.7681 2.17918 13.2076 0.666901 12.2347C0.941869 12.2664 1.20623 12.277 1.49177 12.277C3.08862 12.277 4.55861 11.7377 5.73248 10.8176C4.23078 10.7859 2.97231 9.80236 2.53872 8.44871C2.75024 8.48042 2.96173 8.50158 3.18384 8.50158C3.49051 8.50158 3.79722 8.45926 4.08273 8.38527C2.51759 8.06798 1.34369 6.69321 1.34369 5.03288V4.99059C1.79842 5.2444 2.32723 5.40303 2.88768 5.42416C1.96762 4.81078 1.36485 3.76383 1.36485 2.57939C1.36485 1.94488 1.53403 1.36324 1.83015 0.855618C3.51164 2.92838 6.03915 4.282 8.87331 4.43008C8.82045 4.17627 8.78871 3.91191 8.78871 3.64752C8.78871 1.76509 10.3116 0.231689 12.2045 0.231689C13.188 0.231689 14.0764 0.644126 14.7003 1.31037C15.4723 1.16232 16.2126 0.876777 16.8683 0.485499C16.6144 1.27867 16.0751 1.94491 15.3666 2.3679C16.054 2.2939 16.7202 2.10351 17.3336 1.83915C16.8683 2.51594 16.2867 3.11871 15.6204 3.60521V3.60521Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9853 1.97421C16.7936 1.25247 16.2289 0.684051 15.5118 0.491149C14.212 0.140625 9.00023 0.140625 9.00023 0.140625C9.00023 0.140625 3.78845 0.140625 2.48868 0.491149C1.7716 0.684081 1.20685 1.25247 1.01517 1.97421C0.666901 3.28241 0.666901 6.01183 0.666901 6.01183C0.666901 6.01183 0.666901 8.74126 1.01517 10.0495C1.20685 10.7712 1.7716 11.3159 2.48868 11.5088C3.78845 11.8594 9.00023 11.8594 9.00023 11.8594C9.00023 11.8594 14.212 11.8594 15.5118 11.5088C16.2289 11.3159 16.7936 10.7712 16.9853 10.0495C17.3336 8.74126 17.3336 6.01183 17.3336 6.01183C17.3336 6.01183 17.3336 3.28241 16.9853 1.97421ZM7.29568 8.48995V3.53372L11.6517 6.01189L7.29568 8.48995Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16839 11.1987C4.16839 12.1623 3.38119 12.9495 2.41764 12.9495C1.4541 12.9495 0.666901 12.1623 0.666901 11.1987C0.666901 10.2352 1.4541 9.448 2.41764 9.448H4.16839V11.1987ZM5.05083 11.1987C5.05083 10.2352 5.83803 9.448 6.80157 9.448C7.76511 9.448 8.55232 10.2352 8.55232 11.1987V15.5827C8.55232 16.5462 7.76511 17.3334 6.80157 17.3334C5.83803 17.3334 5.05083 16.5462 5.05083 15.5827V11.1987ZM6.80157 4.16824C5.83803 4.16824 5.05083 3.38103 5.05083 2.41749C5.05083 1.45395 5.83803 0.666748 6.80157 0.666748C7.76511 0.666748 8.55232 1.45395 8.55232 2.41749V4.16824H6.80157ZM6.80157 5.05068C7.76511 5.05068 8.55232 5.83788 8.55232 6.80142C8.55232 7.76496 7.76511 8.55217 6.80157 8.55217H2.41764C1.4541 8.55217 0.666901 7.76496 0.666901 6.80142C0.666901 5.83788 1.4541 5.05068 2.41764 5.05068H6.80157ZM13.8321 6.80142C13.8321 5.83788 14.6193 5.05068 15.5828 5.05068C16.5464 5.05068 17.3336 5.83788 17.3336 6.80142C17.3336 7.76496 16.5464 8.55217 15.5828 8.55217H13.8321V6.80142ZM12.9496 6.80142C12.9496 7.76496 12.1624 8.55217 11.1989 8.55217C10.2354 8.55217 9.44815 7.76496 9.44815 6.80142V2.41749C9.44815 1.45395 10.2354 0.666748 11.1989 0.666748C12.1624 0.666748 12.9496 1.45395 12.9496 2.41749V6.80142ZM11.1989 13.8319C12.1624 13.8319 12.9496 14.6191 12.9496 15.5827C12.9496 16.5462 12.1624 17.3334 11.1989 17.3334C10.2354 17.3334 9.44815 16.5462 9.44815 15.5827V13.8319H11.1989ZM11.1989 12.9495C10.2354 12.9495 9.44815 12.1623 9.44815 11.1987C9.44815 10.2352 10.2354 9.448 11.1989 9.448H15.5828C16.5464 9.448 17.3336 10.2352 17.3336 11.1987C17.3336 12.1623 16.5464 12.9495 15.5828 12.9495H11.1989Z" fill="currentColor" />
                        </svg>
                    </a>
                    </div>
                </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                <div class="cs-team cs-style1">
                    <div class="cs-member_thumb">
                    <img src="{{ asset('frontend_assets') }}/img/member_4.jpeg" alt="Member" />
                    <div class="cs-member_overlay"></div>
                    </div>
                    <div class="cs-member_info">
                    <h2 class="cs-member_name">
                        <a href="team-details.html">Melina Opole</a>
                    </h2>
                    <div class="cs-member_designation">WP Developer</div>
                    </div>
                    <div class="cs-member_social cs-primary_color">
                    <a href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6204 3.60521C15.631 3.75325 15.631 3.90133 15.631 4.04938C15.631 8.56502 12.194 13.7681 5.91227 13.7681C3.97697 13.7681 2.17918 13.2076 0.666901 12.2347C0.941869 12.2664 1.20623 12.277 1.49177 12.277C3.08862 12.277 4.55861 11.7377 5.73248 10.8176C4.23078 10.7859 2.97231 9.80236 2.53872 8.44871C2.75024 8.48042 2.96173 8.50158 3.18384 8.50158C3.49051 8.50158 3.79722 8.45926 4.08273 8.38527C2.51759 8.06798 1.34369 6.69321 1.34369 5.03288V4.99059C1.79842 5.2444 2.32723 5.40303 2.88768 5.42416C1.96762 4.81078 1.36485 3.76383 1.36485 2.57939C1.36485 1.94488 1.53403 1.36324 1.83015 0.855618C3.51164 2.92838 6.03915 4.282 8.87331 4.43008C8.82045 4.17627 8.78871 3.91191 8.78871 3.64752C8.78871 1.76509 10.3116 0.231689 12.2045 0.231689C13.188 0.231689 14.0764 0.644126 14.7003 1.31037C15.4723 1.16232 16.2126 0.876777 16.8683 0.485499C16.6144 1.27867 16.0751 1.94491 15.3666 2.3679C16.054 2.2939 16.7202 2.10351 17.3336 1.83915C16.8683 2.51594 16.2867 3.11871 15.6204 3.60521V3.60521Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9853 1.97421C16.7936 1.25247 16.2289 0.684051 15.5118 0.491149C14.212 0.140625 9.00023 0.140625 9.00023 0.140625C9.00023 0.140625 3.78845 0.140625 2.48868 0.491149C1.7716 0.684081 1.20685 1.25247 1.01517 1.97421C0.666901 3.28241 0.666901 6.01183 0.666901 6.01183C0.666901 6.01183 0.666901 8.74126 1.01517 10.0495C1.20685 10.7712 1.7716 11.3159 2.48868 11.5088C3.78845 11.8594 9.00023 11.8594 9.00023 11.8594C9.00023 11.8594 14.212 11.8594 15.5118 11.5088C16.2289 11.3159 16.7936 10.7712 16.9853 10.0495C17.3336 8.74126 17.3336 6.01183 17.3336 6.01183C17.3336 6.01183 17.3336 3.28241 16.9853 1.97421ZM7.29568 8.48995V3.53372L11.6517 6.01189L7.29568 8.48995Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16839 11.1987C4.16839 12.1623 3.38119 12.9495 2.41764 12.9495C1.4541 12.9495 0.666901 12.1623 0.666901 11.1987C0.666901 10.2352 1.4541 9.448 2.41764 9.448H4.16839V11.1987ZM5.05083 11.1987C5.05083 10.2352 5.83803 9.448 6.80157 9.448C7.76511 9.448 8.55232 10.2352 8.55232 11.1987V15.5827C8.55232 16.5462 7.76511 17.3334 6.80157 17.3334C5.83803 17.3334 5.05083 16.5462 5.05083 15.5827V11.1987ZM6.80157 4.16824C5.83803 4.16824 5.05083 3.38103 5.05083 2.41749C5.05083 1.45395 5.83803 0.666748 6.80157 0.666748C7.76511 0.666748 8.55232 1.45395 8.55232 2.41749V4.16824H6.80157ZM6.80157 5.05068C7.76511 5.05068 8.55232 5.83788 8.55232 6.80142C8.55232 7.76496 7.76511 8.55217 6.80157 8.55217H2.41764C1.4541 8.55217 0.666901 7.76496 0.666901 6.80142C0.666901 5.83788 1.4541 5.05068 2.41764 5.05068H6.80157ZM13.8321 6.80142C13.8321 5.83788 14.6193 5.05068 15.5828 5.05068C16.5464 5.05068 17.3336 5.83788 17.3336 6.80142C17.3336 7.76496 16.5464 8.55217 15.5828 8.55217H13.8321V6.80142ZM12.9496 6.80142C12.9496 7.76496 12.1624 8.55217 11.1989 8.55217C10.2354 8.55217 9.44815 7.76496 9.44815 6.80142V2.41749C9.44815 1.45395 10.2354 0.666748 11.1989 0.666748C12.1624 0.666748 12.9496 1.45395 12.9496 2.41749V6.80142ZM11.1989 13.8319C12.1624 13.8319 12.9496 14.6191 12.9496 15.5827C12.9496 16.5462 12.1624 17.3334 11.1989 17.3334C10.2354 17.3334 9.44815 16.5462 9.44815 15.5827V13.8319H11.1989ZM11.1989 12.9495C10.2354 12.9495 9.44815 12.1623 9.44815 11.1987C9.44815 10.2352 10.2354 9.448 11.1989 9.448H15.5828C16.5464 9.448 17.3336 10.2352 17.3336 11.1987C17.3336 12.1623 16.5464 12.9495 15.5828 12.9495H11.1989Z" fill="currentColor" />
                        </svg>
                    </a>
                    </div>
                </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                <div class="cs-team cs-style1">
                    <div class="cs-member_thumb">
                    <img src="{{ asset('frontend_assets') }}/img/member_1.jpeg" alt="Member" />
                    <div class="cs-member_overlay"></div>
                    </div>
                    <div class="cs-member_info">
                    <h2 class="cs-member_name">
                        <a href="team-details.html">Melon Bulgery</a>
                    </h2>
                    <div class="cs-member_designation">Product Designer</div>
                    </div>
                    <div class="cs-member_social cs-primary_color">
                    <a href="#">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.6204 3.60521C15.631 3.75325 15.631 3.90133 15.631 4.04938C15.631 8.56502 12.194 13.7681 5.91227 13.7681C3.97697 13.7681 2.17918 13.2076 0.666901 12.2347C0.941869 12.2664 1.20623 12.277 1.49177 12.277C3.08862 12.277 4.55861 11.7377 5.73248 10.8176C4.23078 10.7859 2.97231 9.80236 2.53872 8.44871C2.75024 8.48042 2.96173 8.50158 3.18384 8.50158C3.49051 8.50158 3.79722 8.45926 4.08273 8.38527C2.51759 8.06798 1.34369 6.69321 1.34369 5.03288V4.99059C1.79842 5.2444 2.32723 5.40303 2.88768 5.42416C1.96762 4.81078 1.36485 3.76383 1.36485 2.57939C1.36485 1.94488 1.53403 1.36324 1.83015 0.855618C3.51164 2.92838 6.03915 4.282 8.87331 4.43008C8.82045 4.17627 8.78871 3.91191 8.78871 3.64752C8.78871 1.76509 10.3116 0.231689 12.2045 0.231689C13.188 0.231689 14.0764 0.644126 14.7003 1.31037C15.4723 1.16232 16.2126 0.876777 16.8683 0.485499C16.6144 1.27867 16.0751 1.94491 15.3666 2.3679C16.054 2.2939 16.7202 2.10351 17.3336 1.83915C16.8683 2.51594 16.2867 3.11871 15.6204 3.60521V3.60521Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9853 1.97421C16.7936 1.25247 16.2289 0.684051 15.5118 0.491149C14.212 0.140625 9.00023 0.140625 9.00023 0.140625C9.00023 0.140625 3.78845 0.140625 2.48868 0.491149C1.7716 0.684081 1.20685 1.25247 1.01517 1.97421C0.666901 3.28241 0.666901 6.01183 0.666901 6.01183C0.666901 6.01183 0.666901 8.74126 1.01517 10.0495C1.20685 10.7712 1.7716 11.3159 2.48868 11.5088C3.78845 11.8594 9.00023 11.8594 9.00023 11.8594C9.00023 11.8594 14.212 11.8594 15.5118 11.5088C16.2289 11.3159 16.7936 10.7712 16.9853 10.0495C17.3336 8.74126 17.3336 6.01183 17.3336 6.01183C17.3336 6.01183 17.3336 3.28241 16.9853 1.97421ZM7.29568 8.48995V3.53372L11.6517 6.01189L7.29568 8.48995Z" fill="currentColor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16839 11.1987C4.16839 12.1623 3.38119 12.9495 2.41764 12.9495C1.4541 12.9495 0.666901 12.1623 0.666901 11.1987C0.666901 10.2352 1.4541 9.448 2.41764 9.448H4.16839V11.1987ZM5.05083 11.1987C5.05083 10.2352 5.83803 9.448 6.80157 9.448C7.76511 9.448 8.55232 10.2352 8.55232 11.1987V15.5827C8.55232 16.5462 7.76511 17.3334 6.80157 17.3334C5.83803 17.3334 5.05083 16.5462 5.05083 15.5827V11.1987ZM6.80157 4.16824C5.83803 4.16824 5.05083 3.38103 5.05083 2.41749C5.05083 1.45395 5.83803 0.666748 6.80157 0.666748C7.76511 0.666748 8.55232 1.45395 8.55232 2.41749V4.16824H6.80157ZM6.80157 5.05068C7.76511 5.05068 8.55232 5.83788 8.55232 6.80142C8.55232 7.76496 7.76511 8.55217 6.80157 8.55217H2.41764C1.4541 8.55217 0.666901 7.76496 0.666901 6.80142C0.666901 5.83788 1.4541 5.05068 2.41764 5.05068H6.80157ZM13.8321 6.80142C13.8321 5.83788 14.6193 5.05068 15.5828 5.05068C16.5464 5.05068 17.3336 5.83788 17.3336 6.80142C17.3336 7.76496 16.5464 8.55217 15.5828 8.55217H13.8321V6.80142ZM12.9496 6.80142C12.9496 7.76496 12.1624 8.55217 11.1989 8.55217C10.2354 8.55217 9.44815 7.76496 9.44815 6.80142V2.41749C9.44815 1.45395 10.2354 0.666748 11.1989 0.666748C12.1624 0.666748 12.9496 1.45395 12.9496 2.41749V6.80142ZM11.1989 13.8319C12.1624 13.8319 12.9496 14.6191 12.9496 15.5827C12.9496 16.5462 12.1624 17.3334 11.1989 17.3334C10.2354 17.3334 9.44815 16.5462 9.44815 15.5827V13.8319H11.1989ZM11.1989 12.9495C10.2354 12.9495 9.44815 12.1623 9.44815 11.1987C9.44815 10.2352 10.2354 9.448 11.1989 9.448H15.5828C16.5464 9.448 17.3336 10.2352 17.3336 11.1987C17.3336 12.1623 16.5464 12.9495 15.5828 12.9495H11.1989Z" fill="currentColor" />
                        </svg>
                    </a>
                    </div>
                </div>
                </div>
                <!-- .cs-slide -->
            </div>
            </div>
            <!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
        </div>
        <!-- .cs-slider -->
        </div>
    </section>
    <!-- End Team Section -->
    <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start Testimonial Section -->
    @if ($tesimonial_exist)
        <x-frontend.testimonial.testimonial/>
    @endif
    <!-- End Testimonial Section -->

    <!-- Start Blog Section -->
    <section class="cs-shape_wrap_4 cs-parallax">
        <div class="cs-shape_4 cs-to_up"></div>
        <div class="cs-shape_4 cs-to_right"></div>
        <div class="cs-height_150 cs-height_lg_80"></div>
        <div class="container">
        <div class="cs-slider cs-style1 cs-gap-24">
            <div class="cs-slider_left">
            <div class="cs-section_heading cs-style1">
                <h3 class="cs-section_subtitle">Our Blog</h3>
                <h2 class="cs-section_title">Explore recent publication</h2>
                <div class="cs-height_45 cs-height_lg_20"></div>
                <a href="blog.html" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <span>View More Blog</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                </svg>
                </a>
            </div>
            </div>
            <div class="cs-slider_right">
            <div class="cs-post_wrap">
                <div class="cs-slider_container" data-autoplay="1" data-loop="1" data-speed="1000" data-center="0" data-variable-width="1" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
                <div class="cs-slider_wrapper">
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_1.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">07 Mar 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">How to keep fear from ruining your art business with confident</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_2.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">10 Feb 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">Artistic mind will be great for creation anything</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_3.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">05 Apr 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">A.I will take over all job for human within next year</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_1.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">07 Mar 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">How to keep fear from ruining your art business with confident</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_2.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">10 Feb 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">Artistic mind will be great for creation anything</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                    <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_3.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">05 Apr 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">A.I will take over all job for human within next year</a>
                        </h2>
                        </div>
                    </div>
                    </div>
                    <!-- .cs-slide -->
                </div>
                </div>
                <!-- .cs-slider_container -->
                <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
            </div>
            </div>
        </div>
        <!-- .cs-slider -->
        </div>
        <div class="cs-height_125 cs-height_lg_70"></div>
    </section>
    <!-- End Blog Section -->
    <!-- End Moving Text -->
    <div class="cs-moving_text_wrap cs-bold cs-primary_font">
        <div class="cs-moving_text_in">
        <div class="cs-moving_text">Our reputed world wide partners</div>
        <div class="cs-moving_text">Our reputed world wide partners</div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <!-- Start Partner Logo -->
    <div class="container">
        <div class="cs-partner_logo_wrap">
        <div class="cs-partner_logo">
            <img src="{{ asset('frontend_assets') }}/img/partner_1.svg" alt="Partner" />
        </div>
        <div class="cs-partner_logo">
            <img src="{{ asset('frontend_assets') }}/img/partner_2.svg" alt="Partner" />
        </div>
        <div class="cs-partner_logo">
            <img src="{{ asset('frontend_assets') }}/img/partner_3.svg" alt="Partner" />
        </div>
        <div class="cs-partner_logo">
            <img src="{{ asset('frontend_assets') }}/img/partner_4.svg" alt="Partner" />
        </div>
        <div class="cs-partner_logo">
            <img src="{{ asset('frontend_assets') }}/img/partner_5.svg" alt="Partner" />
        </div>
        </div>
    </div>
    <!-- End Partner Logo -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <!-- Start CTA -->
    <section>
        <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="{{ asset('frontend_assets') }}/img/cta_bg.jpeg">
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-cta_in">
            <h2 class="cs-cta_title cs-semi_bold cs-m0"> Let’s disscuse make <br />something <i>cool</i> together </h2>
            <div class="cs-height_70 cs-height_lg_30"></div>
            <a href="contact.html" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <span>Apply For Meeting</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
                </svg>
            </a>
            </div>
        </div>
        </div>
    </section>
    <!-- End CTA -->
@endsection
