<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from arino-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 15:33:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Laralink" />
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('storage/general_images/favicon') }}/{{ favicon() }}" />
    <!-- Site Title -->
    <title> {{ website_title() }} </title>

    {{-- Custom Css --}}
    @yield('frontend_footer_css')

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins/slick.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css" />
</head>
<body>
    {{-- <div class="cs-preloader cs-center">
    <div class="cs-preloader_in"></div>
    </div> --}}
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
    <div class="cs-main_header">
        <div class="container">
            <div class="cs-main_header_in">

                @php
                    $url = url()->current();
                    $explode = explode('/', $url);
                    $current_page = end($explode);
                    $lastTwoWords = $explode[count($explode)-2] . '/' . $explode[count($explode)-1];
                    $lastthreeWords = $explode[count($explode)-3]. '/' . $explode[count($explode)-2] . '/'. $explode[count($explode)-1];
                @endphp

                <div class="cs-main_header_left">
                <a class="cs-site_branding" href="{{ route('index') }}">
                    <img src="{{ asset('storage/general_images/logo') }}/{{ logo() }}" alt="Logo" style="max-height:100px;" />
                </a>
                </div>
                <div class="cs-main_header_center">
                    <div class="cs-nav cs-primary_font cs-medium">
                        <ul class="cs-nav_list">
                        <li class="cs-mega_menu">
                            <a href="{{ route('index') }}" style="{{ $current_page == '127.0.0.1:8000' ? 'color: #FF4A17' : ''}}"> Home </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" style="{{ $current_page == 'about' ? 'color: #FF4A17' : ''}}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}" style="{{ $current_page == 'service' ? 'color: #FF4A17' : ''}}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}" style="{{ $current_page == 'portfolio' ? 'color: #FF4A17' : ''}}">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" style="{{ $current_page == 'blog' ? 'color: #FF4A17' : ''}}">Blog</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" style="{{ $current_page == 'contact' ? 'color: #FF4A17' : ''}}"> More </a>
                            <ul>
                            <li>
                                <a href="{{ route('contact') }}" style="{{ $current_page == 'contact' ? 'color: #FF4A17' : ''}}"> Contact </a>
                            </li>
                            <li>
                                <a href="{{ route('team') }}" style="{{ $current_page == 'team' ? 'color: #FF4A17' : ''}}"> Team </a>
                            </li>
                            <li>
                                <a href="case-study.html">Case Study Details</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="cs-main_header_right">
                <div class="cs-toolbox">
                    <span class="cs-icon_btn">
                    <span class="cs-icon_btn_in">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <div class="cs-side_header">
    <button class="cs-close"></button>
    <div class="cs-side_header_overlay"></div>
    <div class="cs-side_header_in">
        <div class="cs-side_header_shape"></div>
        <a class="cs-site_branding" href="index.html">
        <img src="{{ asset('frontend_assets') }}/img/footer_logo.svg" alt="Logo" />
        </a>
        <div class="cs-side_header_box">
        <h2 class="cs-side_header_heading"> Do you have a project in your <br /> mind? Keep connect us. </h2>
        </div>
        <div class="cs-side_header_box">
            <h3 class="cs-side_header_title cs-primary_color">Contact Us</h3>
            <ul class="cs-contact_info cs-style1 cs-mp0">
                @if (App\Models\User::find(1)->phone && App\Models\User::find(1)->phone_status == 'visible')
                    <li>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17" />
                        </svg>
                        <span>{{ App\Models\User::find(1)->phone }}</span>
                    </li>
                @endif
                @if (App\Models\User::find(1)->email && App\Models\User::find(1)->email_status == 'visible')
                    <li>
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#FF4A17" />
                        </svg>
                        <span>{{ App\Models\User::find(1)->email }}</span>
                    </li>
                @endif
                @if (App\Models\User::find(1)->address && App\Models\User::find(1)->address_status == 'visible')
                    <li>
                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17" />
                        </svg>
                        <span> {{ App\Models\User::find(1)->address }} </span>
                    </li>
                @endif
            </ul>
        </div>
        <div class="cs-side_header_box">
        <h3 class="cs-side_header_title cs-primary_color">Subscribe</h3>
        <div class="cs-newsletter cs-style1">
            <form action="#" class="cs-newsletter_form">
            <input type="email" class="cs-newsletter_input" placeholder="example@gmail.com" />
            <button class="cs-newsletter_btn">
                <span>Send</span>
            </button>
            </form>
            <div class="cs-newsletter_text"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </div>
        </div>
        </div>
        @if (App\Models\SocialMedia::find(1)->status == 'visible')
            <div class="cs-side_header_box">
                <div class="cs-social_btns cs-style1">
                    @if (App\Models\SocialMedia::find(1)->facebook)
                        <a href="https://www.facebook.com/{{ App\Models\SocialMedia::find(1)->facebook }}" target="_blank" class="cs-center">
                            <svg width="15" height="15" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd11b7e3"> <path style="display: inline;" d="M283.122,122.174c0,5.24,0,22.319,0,46.583h83.424l-9.045,74.367h-74.379 c0,114.688,0,268.375,0,268.375h-98.726c0,0,0-151.653,0-268.375h-51.443v-74.367h51.443c0-29.492,0-50.463,0-56.302 c0-27.82-2.096-41.02,9.725-62.578C205.948,28.32,239.308-0.174,297.007,0.512c57.713,0.711,82.04,6.263,82.04,6.263 l-12.501,79.257c0,0-36.853-9.731-54.942-6.263C293.539,83.238,283.122,94.366,283.122,122.174z"> </path> </g> </g></svg>
                        </a>
                    @endif

                    @if (App\Models\SocialMedia::find(1)->linkedin)
                        <a href="https://www.linkedin.com/in/{{ App\Models\SocialMedia::find(1)->linkedin }}" class="cs-center">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.04799 13.7497H1.45647V5.4043H4.04799V13.7497ZM2.75084 4.2659C1.92215 4.2659 1.25 3.57952 1.25 2.75084C1.25 2.35279 1.40812 1.97105 1.68958 1.68958C1.97105 1.40812 2.35279 1.25 2.75084 1.25C3.14888 1.25 3.53063 1.40812 3.81209 1.68958C4.09355 1.97105 4.25167 2.35279 4.25167 2.75084C4.25167 3.57952 3.57924 4.2659 2.75084 4.2659ZM13.7472 13.7497H11.1613V9.68722C11.1613 8.71903 11.1417 7.4774 9.81389 7.4774C8.46652 7.4774 8.26004 8.5293 8.26004 9.61747V13.7497H5.67132V5.4043H8.15681V6.54269H8.19308C8.53906 5.887 9.38421 5.19503 10.6451 5.19503C13.2679 5.19503 13.75 6.92215 13.75 9.16546V13.7497H13.7472Z" fill="white" />
                        </svg>
                        </a>
                    @endif

                    @if (App\Models\SocialMedia::find(1)->twitter)
                        <a href="https://www.twitter.com/{{ App\Models\SocialMedia::find(1)->twitter }}" target="_blank" class="cs-center">
                        <svg width="15" height="15" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4651 2.95396C11.4731 3.065 11.4731 3.17606 11.4731 3.2871C11.4731 6.67383 8.89535 10.5761 4.18402 10.5761C2.73255 10.5761 1.38421 10.1557 0.25 9.42608C0.456226 9.44986 0.654494 9.4578 0.868655 9.4578C2.06629 9.4578 3.16879 9.0533 4.04918 8.36326C2.92291 8.33946 1.97906 7.60183 1.65386 6.5866C1.81251 6.61038 1.97112 6.62624 2.1377 6.62624C2.36771 6.62624 2.59774 6.59451 2.81188 6.53901C1.63802 6.30105 0.757595 5.26996 0.757595 4.02472V3.99301C1.09864 4.18336 1.49524 4.30233 1.91558 4.31818C1.22554 3.85814 0.773464 3.07294 0.773464 2.1846C0.773464 1.70872 0.900344 1.27249 1.12244 0.891774C2.38355 2.44635 4.27919 3.46156 6.40481 3.57262C6.36516 3.38226 6.34136 3.184 6.34136 2.9857C6.34136 1.57388 7.4835 0.423828 8.90323 0.423828C9.64086 0.423828 10.3071 0.733156 10.7751 1.23284C11.354 1.1218 11.9093 0.907643 12.401 0.614185C12.2106 1.20906 11.8061 1.70875 11.2748 2.02598C11.7903 1.97049 12.29 1.82769 12.75 1.62942C12.4011 2.13702 11.9648 2.5891 11.4651 2.95396V2.95396Z" fill="white" />
                        </svg>
                        </a>
                    @endif

                    @if (App\Models\SocialMedia::find(1)->instagram)
                        <a href="https://www.instagram.com/{{ App\Models\SocialMedia::find(1)->instagram }}" target="_blank" class="cs-center">
                        <svg width="15" height="15" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="#fff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path> </g> </g> </g> </g></svg>
                        </a>
                    @endif

                    @if (App\Models\SocialMedia::find(1)->github)
                        <a href="https://github.com/{{ App\Models\SocialMedia::find(1)->github }}" target="_blank" class="cs-center">
                            <svg width="20" height="20" fill="#ffffff" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M9.464 17.178a4.506 4.506 0 0 1-2.013.317 4.29 4.29 0 0 1-2.007-.317.746.746 0 0 1-.277-.587c0-.22-.008-.798-.012-1.567-2.564.557-3.105-1.236-3.105-1.236a2.44 2.44 0 0 0-1.024-1.348c-.836-.572.063-.56.063-.56a1.937 1.937 0 0 1 1.412.95 1.962 1.962 0 0 0 2.682.765 1.971 1.971 0 0 1 .586-1.233c-2.046-.232-4.198-1.023-4.198-4.554a3.566 3.566 0 0 1 .948-2.474 3.313 3.313 0 0 1 .091-2.438s.773-.248 2.534.945a8.727 8.727 0 0 1 4.615 0c1.76-1.193 2.532-.945 2.532-.945a3.31 3.31 0 0 1 .092 2.438 3.562 3.562 0 0 1 .947 2.474c0 3.54-2.155 4.32-4.208 4.548a2.195 2.195 0 0 1 .625 1.706c0 1.232-.011 2.227-.011 2.529a.694.694 0 0 1-.272.587z"></path></g></svg>
                        </a>
                    @endif
                </div>
            </div>
        @endif
    </div>
    </div>
    <!-- End Header Section -->

    {{-- Main Container Start --}}
    @yield('frontend_content')
    {{-- Main Container End --}}

    <!-- Start Footer -->
    <footer class="cs-fooer">
        <div class="cs-fooer_main">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-footer_item">
                <div class="cs-text_widget">
                    <img src="{{ asset('storage/general_images/logo') }}/{{ logo() }}" alt="Logo" style="max-height:100px;" />
                    <p> Welcome to arino sed ut perspiciae omunde omnis iste natus error sitort voluptatem accusantium. </p>
                </div>
                @if (App\Models\SocialMedia::find(1)->status == 'visible')
                    <div class="cs-social_btns cs-style1">
                        @if (App\Models\SocialMedia::find(1)->facebook)
                            <a href="https://www.facebook.com/{{ App\Models\SocialMedia::find(1)->facebook }}" target="_blank" class="cs-center">
                                <svg width="15" height="15" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd11b7e3"> <path style="display: inline;" d="M283.122,122.174c0,5.24,0,22.319,0,46.583h83.424l-9.045,74.367h-74.379 c0,114.688,0,268.375,0,268.375h-98.726c0,0,0-151.653,0-268.375h-51.443v-74.367h51.443c0-29.492,0-50.463,0-56.302 c0-27.82-2.096-41.02,9.725-62.578C205.948,28.32,239.308-0.174,297.007,0.512c57.713,0.711,82.04,6.263,82.04,6.263 l-12.501,79.257c0,0-36.853-9.731-54.942-6.263C293.539,83.238,283.122,94.366,283.122,122.174z"> </path> </g> </g></svg>
                            </a>
                        @endif

                        @if (App\Models\SocialMedia::find(1)->linkedin)
                            <a href="https://www.linkedin.com/in/{{ App\Models\SocialMedia::find(1)->linkedin }}" class="cs-center">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.04799 13.7497H1.45647V5.4043H4.04799V13.7497ZM2.75084 4.2659C1.92215 4.2659 1.25 3.57952 1.25 2.75084C1.25 2.35279 1.40812 1.97105 1.68958 1.68958C1.97105 1.40812 2.35279 1.25 2.75084 1.25C3.14888 1.25 3.53063 1.40812 3.81209 1.68958C4.09355 1.97105 4.25167 2.35279 4.25167 2.75084C4.25167 3.57952 3.57924 4.2659 2.75084 4.2659ZM13.7472 13.7497H11.1613V9.68722C11.1613 8.71903 11.1417 7.4774 9.81389 7.4774C8.46652 7.4774 8.26004 8.5293 8.26004 9.61747V13.7497H5.67132V5.4043H8.15681V6.54269H8.19308C8.53906 5.887 9.38421 5.19503 10.6451 5.19503C13.2679 5.19503 13.75 6.92215 13.75 9.16546V13.7497H13.7472Z" fill="white" />
                            </svg>
                            </a>
                        @endif

                        @if (App\Models\SocialMedia::find(1)->twitter)
                            <a href="https://www.twitter.com/{{ App\Models\SocialMedia::find(1)->twitter }}" target="_blank" class="cs-center">
                            <svg width="15" height="15" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4651 2.95396C11.4731 3.065 11.4731 3.17606 11.4731 3.2871C11.4731 6.67383 8.89535 10.5761 4.18402 10.5761C2.73255 10.5761 1.38421 10.1557 0.25 9.42608C0.456226 9.44986 0.654494 9.4578 0.868655 9.4578C2.06629 9.4578 3.16879 9.0533 4.04918 8.36326C2.92291 8.33946 1.97906 7.60183 1.65386 6.5866C1.81251 6.61038 1.97112 6.62624 2.1377 6.62624C2.36771 6.62624 2.59774 6.59451 2.81188 6.53901C1.63802 6.30105 0.757595 5.26996 0.757595 4.02472V3.99301C1.09864 4.18336 1.49524 4.30233 1.91558 4.31818C1.22554 3.85814 0.773464 3.07294 0.773464 2.1846C0.773464 1.70872 0.900344 1.27249 1.12244 0.891774C2.38355 2.44635 4.27919 3.46156 6.40481 3.57262C6.36516 3.38226 6.34136 3.184 6.34136 2.9857C6.34136 1.57388 7.4835 0.423828 8.90323 0.423828C9.64086 0.423828 10.3071 0.733156 10.7751 1.23284C11.354 1.1218 11.9093 0.907643 12.401 0.614185C12.2106 1.20906 11.8061 1.70875 11.2748 2.02598C11.7903 1.97049 12.29 1.82769 12.75 1.62942C12.4011 2.13702 11.9648 2.5891 11.4651 2.95396V2.95396Z" fill="white" />
                            </svg>
                            </a>
                        @endif

                        @if (App\Models\SocialMedia::find(1)->instagram)
                            <a href="https://www.instagram.com/{{ App\Models\SocialMedia::find(1)->instagram }}" target="_blank" class="cs-center">
                            <svg width="15" height="15" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="#fff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path> </g> </g> </g> </g></svg>
                            </a>
                        @endif

                        @if (App\Models\SocialMedia::find(1)->github)
                            <a href="https://github.com/{{ App\Models\SocialMedia::find(1)->github }}" target="_blank" class="cs-center">
                                <svg width="20" height="20" fill="#ffffff" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M9.464 17.178a4.506 4.506 0 0 1-2.013.317 4.29 4.29 0 0 1-2.007-.317.746.746 0 0 1-.277-.587c0-.22-.008-.798-.012-1.567-2.564.557-3.105-1.236-3.105-1.236a2.44 2.44 0 0 0-1.024-1.348c-.836-.572.063-.56.063-.56a1.937 1.937 0 0 1 1.412.95 1.962 1.962 0 0 0 2.682.765 1.971 1.971 0 0 1 .586-1.233c-2.046-.232-4.198-1.023-4.198-4.554a3.566 3.566 0 0 1 .948-2.474 3.313 3.313 0 0 1 .091-2.438s.773-.248 2.534.945a8.727 8.727 0 0 1 4.615 0c1.76-1.193 2.532-.945 2.532-.945a3.31 3.31 0 0 1 .092 2.438 3.562 3.562 0 0 1 .947 2.474c0 3.54-2.155 4.32-4.208 4.548a2.195 2.195 0 0 1 .625 1.706c0 1.232-.011 2.227-.011 2.529a.694.694 0 0 1-.272.587z"></path></g></svg>
                            </a>
                        @endif

                    </div>
                @endif
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-footer_item">
                <h2 class="cs-widget_title">Services</h2>
                <ul class="cs-menu_widget cs-mp0">
                    <li>
                    <a href="service-details.html">UI/UX design</a>
                    </li>
                    <li>
                    <a href="service-details.html">WP development</a>
                    </li>
                    <li>
                    <a href="service-details.html">Digital marketing</a>
                    </li>
                    <li>
                    <a href="service-details.html">React development</a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-footer_item">
                <h2 class="cs-widget_title">Contact Us</h2>
                <ul class="cs-contact_info cs-style1 cs-mp0">
                    @if (App\Models\User::find(1)->phone && App\Models\User::find(1)->phone_status == 'visible')
                        <li>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17" />
                            </svg>
                            <span>{{ App\Models\User::find(1)->phone }}</span>
                        </li>
                    @endif
                    @if (App\Models\User::find(1)->email && App\Models\User::find(1)->email_status == 'visible')
                        <li>
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#FF4A17" />
                            </svg>
                            <span>{{ App\Models\User::find(1)->email }}</span>
                        </li>
                    @endif
                    @if (App\Models\User::find(1)->address && App\Models\User::find(1)->address_status == 'visible')
                        <li>
                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17" />
                            </svg>
                            <span> {{ App\Models\User::find(1)->address }} </span>
                        </li>
                    @endif
                </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-footer_item">
                <h2 class="cs-widget_title">Subscribe</h2>
                <div class="cs-newsletter cs-style1">
                    <form action="#" class="cs-newsletter_form">
                    <input type="email" class="cs-newsletter_input" placeholder="example@gmail.com" />
                    <button class="cs-newsletter_btn">
                        <span>Send</span>
                    </button>
                    </form>
                    <div class="cs-newsletter_text"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="container">
        <div class="cs-bottom_footer">
            <div class="cs-bottom_footer_left">
            <div class="cs-copyright"> {{ copyright_text() }} </div>
            </div>
            <div class="cs-bottom_footer_right">
            <ul class="cs-footer_links cs-mp0">
                <li>
                <a href="#">Terms of Use</a>
                </li>
                <li>
                <a href="#">Privacy Policy</a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->
    <span class="cs-scrollup">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
        </svg>
    </span>
    <!-- Start Video Popup -->
    <div class="cs-video_popup">
        <div class="cs-video_popup_overlay"></div>
        <div class="cs-video_popup_content">
        <div class="cs-video_popup_layer"></div>
        <div class="cs-video_popup_container">
            <div class="cs-video_popup_align">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="about:blank"></iframe>
            </div>
            </div>
            <div class="cs-video_popup_close"></div>
        </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Script -->
    <script src="{{ asset('frontend_assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/isotope.pkg.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/jquery.slick.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/jquery.counter.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/lightgallery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/wow.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/plugins/gsap.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>

    {{-- Custom Script --}}
    @yield('frontend_footer_script')
</body>
</html>
