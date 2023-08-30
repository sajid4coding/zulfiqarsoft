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
    <x-frontend.funfact.funfact />
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
    <x-frontend.portfolio.portfolio/>
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
    <x-frontend.team.team/>
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
    <x-frontend.contact.contact />
    <!-- End CTA -->
@endsection
