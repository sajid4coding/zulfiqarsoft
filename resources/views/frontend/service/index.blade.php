@extends('layouts.frontendmaster')
@section('frontend_content')
  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/service_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Services</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_150 cs-height_lg_80"></div>

  <!-- Start Service Section -->
  <section class="cs-shape_wrap_4 cs-parallax">
    <div class="cs-shape_4 cs-to_up"></div>
    <div class="cs-shape_4 cs-to_right"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">What Can We Do</h3>
            <h2 class="cs-section_title">Services we can help you with</h2>
          </div>
          <div class="cs-height_90 cs-height_lg_45"></div>
        </div>
        <div class="col-xl-8">
          <div class="row">

              {{-- @foreach ($services as $service)
              @endforeach --}}

              <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                <div class="col-lg-3 col-sm-6">
                  <div class="cs-hobble">
                    <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                      {{-- <img src="{{ asset('storage') }}/service_category_thumbnail/{{ $service->service_category_thumbnail }}" alt="Service" width="500px" height="500px"> --}}
                      <img src="{{ asset('frontend_assets') }}/img/service_1.jpeg" alt="Service" width="500px" height="500px">
                      <div class="cs-card_overlay"></div>
                      <div class="cs-card_info">
                        <span class=" cs-hover_layer3 cs-accent_bg"></span>
                        <h2 class="cs-card_title">React.js Development</h2>
                      </div>
                    </a>
                  </div>
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs-hobble">
                <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                  <img src="{{ asset('frontend_assets') }}/img/service_2.jpeg" alt="Service">
                  <div class="cs-card_overlay"></div>
                  <div class="cs-card_info">
                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
                    <h2 class="cs-card_title">React.js Development</h2>
                  </div>
                </a>
              </div>
              <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs-hobble">
                <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                  <img src="{{ asset('frontend_assets') }}/img/service_3.jpeg" alt="Service">
                  <div class="cs-card_overlay"></div>
                  <div class="cs-card_info">
                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
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
                  <img src="{{ asset('frontend_assets') }}/img/service_4.jpeg" alt="Service">
                  <div class="cs-card_overlay"></div>
                  <div class="cs-card_info">
                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
                    <h2 class="cs-card_title">Technology</h2>
                  </div>
                </a>
              </div>
              <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs-hobble">
                <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                  <img src="{{ asset('frontend_assets') }}/img/service_5.jpeg" alt="Service">
                  <div class="cs-card_overlay"></div>
                  <div class="cs-card_info">
                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
                    <h2 class="cs-card_title">Consultancy</h2>
                  </div>
                </a>
              </div>
              <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs-hobble">
                <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                  <img src="{{ asset('frontend_assets') }}/img/service_6.jpeg" alt="Service">
                  <div class="cs-card_overlay"></div>
                  <div class="cs-card_info">
                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
                    <h2 class="cs-card_title">Creative Design</h2>
                  </div>
                </a>
              </div>
              <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <div class="cs-height_150 cs-height_lg_50"></div>

  <!-- Start Pricing Plan -->
  <section>
    <div class="container">
      <div class="cs-tabs cs-style1">
        <div class="cs-tabs_heading">
          <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">Pricing & Packaging</h3>
            <h2 class="cs-section_title">Providing best <br>pricing for client</h2>
          </div>
          <ul class="cs-tab_links cs-style1 cs-mp0 cs-primary_font">
            <li><a href="#tab_1">Monthly</a></li>
            <li class="active"><a href="#tab_2">Yearly</a></li>
          </ul>
        </div><!-- .cs-tabs_heading -->
        <div class="cs-height_85 cs-height_lg_40"></div>
        <div class="cs-tab_body">
          <div class="cs-tab" id="tab_1">
            <div class="row">
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Standard</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$59/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Static responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Video marketing</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Keywords research</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Professional</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$299/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Static responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Content creating</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>High quality keywords</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Ultimate</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$599/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Dynamic responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Video marketing</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Keywords research</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
            </div>
          </div><!-- .cs-tab -->
          <div class="cs-tab active" id="tab_2">
            <div class="row">
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Standard</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$99/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Static responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Video marketing</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Keywords research</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Professional</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$499/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Static responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Content creating</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>High quality keywords</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
              <div class="col-lg-4">
                <div class="cs-pricing_table cs-style1">
                  <h2 class="cs-pricing_title">Ultimate</h2>
                  <div class="cs-pricing_info">
                    <div class="cs-price">
                      <h3 class="cs-white_color">$799/</h3>
                      <span class="cs-accent_color">Yearly</span>
                    </div>
                    <div class="cs-price_text">Per subscriber per year</div>
                  </div>
                  <ul class="cs-pricing_feature cs-mp0">
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Dynamic responsive website</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Video marketing</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Keywords research</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Facebook campaign</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>eCommerce solution</span>
                    </li>
                    <li>
                      <span class="cs-feature_icon cs-accent_color">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18C5.59 18 2 14.41 2 10ZM0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10ZM10 9H6L6 11H10V14L14 10L10 6L10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span>Google adword</span>
                    </li>
                  </ul>
                  <div class="cs-pricing_btn_wrap">
                    <a href="#" class="cs-text_btn">
                      <span>Purchase Now</span>
                      <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
            </div>
          </div><!-- .cs-tab -->
        </div><!-- .cs-tab_body -->
      </div><!-- .cs-tabs -->
    </div>
  </section>
  <!-- End Pricing Plan -->

  <div class="cs-height_125 cs-height_lg_55"></div>
  <!-- Start Testimonial Section -->
  <x-frontend.testimonial.testimonial />
  <!-- End Testimonial Section -->

  <div class="cs-height_150 cs-height_lg_80"></div>

  <!-- Start CTA -->
  <x-frontend.contact.contact />
  <!-- End CTA -->
@endsection
