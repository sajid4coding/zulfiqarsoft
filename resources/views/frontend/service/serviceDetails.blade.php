@extends('layouts.frontendmaster')
@section('frontend_content')
    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{asset('frontend_assets')}}//img/service_hero_bg.jpeg">
        <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Service Details</h1>
            <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Service Details</li>
            </ol>
        </div>
        </div>
    </div>
    <!-- End Hero -->

    <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start Icon Box -->
    <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle">{{$serviceCategory->service_category_title}}</h3>
        <h2 class="cs-section_title">Design working process</h2>
        </div>
        <div class="cs-height_90 cs-height_lg_45"></div>
        <div class="row">
        <div class="col-lg-12 mb-5">
        </div>
        @php
            $SL = 1;
        @endphp
        @foreach ($serviceSteps as $serviceStep)
            <div class="col-lg-4">
                <div class="cs-iconbox cs-style2 text-center">
                <div class="cs-iconbox_icon">
                    <svg width="58" height="57" viewBox="0 0 58 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.75" y="0.75" width="48.5" height="48.5" rx="4.25" stroke="#999696" stroke-width="1.5" stroke-dasharray="3 3"/>
                        <rect x="8" y="7" width="50" height="50" rx="5" fill="#FF4A17"/>
                    </svg>
                    <h4 style="margin-top: -40px; margin-left:5px">{{$SL++}}</h4>
                </div>
                <h2 class="cs-iconbox_title">{{$serviceStep->stepTitle}}</h2>
                <div class="cs-iconbox_subtitle">{{$serviceStep->stepDescription}}</div>
                </div>
                <div class="cs-height_30 cs-height_lg_35"></div>
            </div>
        @endforeach
        {{-- <div class="col-lg-4">
            <div class="cs-iconbox cs-style2 text-center">
            <div class="cs-iconbox_icon">
                <svg width="58" height="57" viewBox="0 0 58 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.25" stroke="#999696" stroke-width="1.5" stroke-dasharray="3 3"/>
                <circle cx="33" cy="32" r="25" fill="#FF4A17"/>
                </svg>
            </div>
            <h2 class="cs-iconbox_title">Wireframing</h2>
            <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium also a doloremque laudantium, totam remain beatae vitae dictaro enim ipsam sunt explicabo.</div>
            </div>
            <div class="cs-height_30 cs-height_lg_35"></div>
        </div>
        <div class="col-lg-4">
            <div class="cs-iconbox cs-style2 text-center">
            <div class="cs-iconbox_icon">
                <svg width="57" height="54" viewBox="0 0 57 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.6803 4.01786L24.2268 1.33929L24.8763 1.71429L25 1.5L25.1237 1.71429L25.7732 1.33929L27.3197 4.01786L26.6702 4.39286L28.2167 7.07143L28.8662 6.69643L30.4127 9.375L29.7631 9.75L31.3096 12.4286L31.9591 12.0536L33.5056 14.7321L32.8561 15.1071L34.4026 17.7857L35.0521 17.4107L36.5986 20.0893L35.949 20.4643L37.4955 23.1429L38.145 22.7679L39.6915 25.4464L39.042 25.8214L40.5885 28.5L41.238 28.125L42.7845 30.8036L42.1349 31.1786L43.6814 33.8571L44.3309 33.4821L45.8774 36.1607L45.2279 36.5357L45.3516 36.75H45.1042V37.5H42.0112V36.75H38.9183V37.5H35.8253V36.75H32.7324V37.5H29.6394V36.75H26.5465V37.5H23.4535V36.75H20.3606V37.5H17.2676V36.75H14.1747V37.5H11.0817V36.75H7.98879V37.5H4.89584V36.75H4.6484L4.77212 36.5357L4.1226 36.1607L5.66908 33.4821L6.3186 33.8571L7.86507 31.1786L7.21555 30.8036L8.76202 28.125L9.41154 28.5L10.958 25.8214L10.3085 25.4464L11.855 22.7679L12.5045 23.1429L14.051 20.4643L13.4014 20.0893L14.9479 17.4107L15.5974 17.7857L17.1439 15.1071L16.4944 14.7321L18.0409 12.0536L18.6904 12.4286L20.2369 9.75L19.5873 9.375L21.1338 6.69643L21.7833 7.07143L23.3298 4.39286L22.6803 4.01786Z" stroke="#999696" stroke-width="1.5" stroke-dasharray="3 3"/>
                <path d="M32 4L53.6506 41.5H10.3494L32 4Z" fill="#FF4A17"/>
                </svg>
            </div>
            <h2 class="cs-iconbox_title">Prototyping</h2>
            <div class="cs-iconbox_subtitle">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium also a doloremque laudantium, totam remain beatae vitae dictaro enim ipsam sunt explicabo.</div>
            </div>
            <div class="cs-height_30 cs-height_lg_35"></div>
        </div> --}}
        </div>
    </div>
    <!-- End Icon Box -->

    <div class="cs-height_110 cs-height_lg_40"></div>

    <!-- Start Related Service -->
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-xl-5 col-lg-6">
                <div class="cs-radius_15 cs-shine_hover_1">
                    <img class="cs-radius_15 w-100" src="{{asset('frontend_assets')}}/img/service_img_1.jpeg" alt="Service Image">
                </div>
                <div class="cs-height_0 cs-height_lg_40"></div>
            </div> --}}
            <div class="col-lg-12 offset-xl-1">
                <h2 class="cs-font_50 cs-m0">Below our Include services</h2>
                <div class="cs-height_50 cs-height_lg_30"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="cs-list cs-style1 cs-mp0">
                            @foreach ($includeservices as $includeservice)
                                {{-- @for ($includeservice; $$includeservice < 6; $$includeservice++) --}}
                                    @php
                                        // $includeservice = App\models\IncludeService::where('serviceID', $i)->get()
                                        // $counters = $i
                                    @endphp
                                    @if ($includeservice)
                                        <li>
                                            <a href="service-details.html" class="cs-text_btn cs-type2">
                                                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                                </svg>
                                                <span>{{ $includeservice->includeserviceName }}</span>
                                            </a>
                                        </li>
                                    @endif
                                {{-- @endfor --}}
                            @endforeach
                            {{-- <li>
                                <a href="service-details.html" class="cs-text_btn cs-type2">
                                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                    </svg>
                                    <span>eCommerce design</span>
                                </a>
                            </li>
                            <li>
                                <a href="service-details.html" class="cs-text_btn cs-type2">
                                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                    </svg>
                                    <span>Landing page</span>
                                </a>
                            </li>
                            <li>
                                <a href="service-details.html" class="cs-text_btn cs-type2">
                                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                    </svg>
                                    <span>Email template</span>
                                </a>
                            </li>
                            <li>
                                <a href="service-details.html" class="cs-text_btn cs-type2">
                                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                    </svg>
                                    <span>Application design</span>
                                </a>
                            </li>
                            <li>
                                <a href="service-details.html" class="cs-text_btn cs-type2">
                                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                    </svg>
                                    <span>Illustration</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-6">
                    <div class="cs-height_0 cs-height_lg_10"></div>
                    <ul class="cs-list cs-style1 cs-mp0">
                        @for ($i = 6; $i < 12; $i++)
                            @php
                                $includeservice = App\models\IncludeService::find($i)
                            @endphp
                            @if ($includeservice)
                                <li>
                                    <a href="service-details.html" class="cs-text_btn cs-type2">
                                        <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                        </svg>
                                        <span>{{$includeservice->includeserviceName}}</span>
                                    </a>
                                </li>
                            @endif
                        @endfor
                        {{-- <li>
                            <a href="service-details.html" class="cs-text_btn cs-type2">
                                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                </svg>
                                <span>Mobile apps design</span>
                            </a>
                        </li>
                        <li>
                            <a href="service-details.html" class="cs-text_btn cs-type2">
                                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                </svg>
                                <span>Banner, brochure, card</span>
                            </a>
                        </li>
                        <li>
                            <a href="service-details.html" class="cs-text_btn cs-type2">
                                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                                </svg>
                                <span>Other design</span>
                            </a>
                        </li> --}}
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Related Service -->

    <div class="cs-height_125 cs-height_lg_55"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="cs-font_50 cs-m0 text-center">Frequently Asked Questions</h2>
                <div class="cs-height_50 cs-height_lg_30"></div>
                <div class="cs-height_0 cs-height_lg_40"></div>
                <div class="cs-accordians cs-style1">
                    @foreach ($serviceFAQs as $serviceFAQ)
                        <div class="cs-accordian">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">{{$serviceFAQ->faqQuestion}}</h2>
                                <span class="cs-accordian_toggle cs-accent_color">
                                <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor"/>
                                </svg>
                                </span>
                            </div>
                            <div class="cs-accordian_body">
                                <p>{{$serviceFAQ->faqQuestion}}</p>
                            </div>
                        </div>
                    @endforeach<!-- .cs-accordian -->
                    {{-- <div class="cs-accordian active">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title">Do you provide design source file after finish work?</h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0L7.5 7.5L15 0H0Z" fill="currentColor"/>
                            </svg>
                            </span>
                        </div>
                        <div class="cs-accordian_body">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui.</p>
                        </div>
                    </div><!-- .cs-accordian --> --}}
                </div><!-- .cs-accordians -->
            </div>
        </div>
    </div>


        <div class="cs-height_125 cs-height_lg_55"></div>

    <!-- Start Testimonial Section -->
    <x-frontend.testimonial.testimonial />
    <!-- End Testimonial Section -->

    <div class="cs-height_150 cs-height_lg_80"></div>

    <!-- Start CTA -->
    <x-frontend.contact.contact />
    <!-- End CTA -->
@endsection
