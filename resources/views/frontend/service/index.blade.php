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
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                @for ($i = 1; $i < 2; $i++)
                    @php
                        $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                    @endphp
                    @if ($service)
                        <div class="col-lg-3 col-sm-6">
                            <div class="cs-hobble">
                            <a href="{{ route('service.details', ['id' => $service->id, 'slug' => $service->service_category_slug]) }}" class="cs-card cs-style1 cs-hover_layer1">
                                @php
                                    $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                    $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    $preImagePath = 'preImage/service_category_thumbnail/'.$service->service_category_thumbnail;
                                    $preImageExists = file_exists(public_path($preImagePath));
                                @endphp
                                @if ($service->service_category_thumbnail && $folderExists)
                                    <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @elseif ($service->service_category_thumbnail && $preImageExists)
                                    <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @else
                                    <img src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
                                @endif
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                <h2 class="cs-card_title">{{ $service->service_category_title }}</h2>
                                </div>
                            </a>
                            </div>
                            <div class="cs-height_0 cs-height_lg_30"></div>
                        </div>
                    @endif
                @endfor
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                @for ($i = 2; $i < 4; $i++)
                    @php
                        $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                    @endphp
                    @if ($service)
                        <div class="col-lg-3 col-sm-6">
                            <div class="cs-hobble">
                            <a href="{{ route('service.details', ['id' => $service->id, 'slug' => $service->service_category_slug]) }}" class="cs-card cs-style1 cs-hover_layer1">
                                @php
                                    $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                    $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    $preImagePath = 'preImage/service_category_thumbnail/'.$service->service_category_thumbnail;
                                    $preImageExists = file_exists(public_path($preImagePath));
                                @endphp
                                @if ($service->service_category_thumbnail && $folderExists)
                                    <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @elseif ($service->service_category_thumbnail && $preImageExists)
                                    <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @else
                                    <img src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
                                @endif
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                <h2 class="cs-card_title">{{ $service->service_category_title }}</h2>
                                </div>
                            </a>
                            </div>
                            <div class="cs-height_0 cs-height_lg_30"></div>
                        </div>
                    @endif
                @endfor
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                @for ($i = 4; $i < 5; $i++)
                    @php
                        $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                    @endphp
                    @if ($service)
                        <div class="col-lg-3 col-sm-6">
                            <div class="cs-hobble">
                            <a href="{{ route('service.details', ['id' => $service->id, 'slug' => $service->service_category_slug]) }}" class="cs-card cs-style1 cs-hover_layer1">
                                @php
                                    $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                    $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    $preImagePath = 'preImage/service_category_thumbnail/'.$service->service_category_thumbnail;
                                    $preImageExists = file_exists(public_path($preImagePath));
                                @endphp
                                @if ($service->service_category_thumbnail && $folderExists)
                                    <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @elseif ($service->service_category_thumbnail && $preImageExists)
                                    <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @else
                                    <img src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
                                @endif
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                <h2 class="cs-card_title">{{ $service->service_category_title }}</h2>
                                </div>
                            </a>
                            </div>
                            <div class="cs-height_0 cs-height_lg_30"></div>
                        </div>
                    @endif
                @endfor
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                @for ($i = 5; $i < 6; $i++)
                    @php
                        $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                    @endphp
                    @if ($service)
                        <div class="col-lg-3 col-sm-6">
                            <div class="cs-hobble">
                            <a href="{{ route('service.details', ['id' => $service->id, 'slug' => $service->service_category_slug]) }}" class="cs-card cs-style1 cs-hover_layer1">
                                @php
                                    $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                    $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    $preImagePath = 'preImage/service_category_thumbnail/'.$service->service_category_thumbnail;
                                    $preImageExists = file_exists(public_path($preImagePath));
                                @endphp
                                @if ($service->service_category_thumbnail && $folderExists)
                                    <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @elseif ($service->service_category_thumbnail && $preImageExists)
                                    <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @else
                                    <img src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
                                @endif
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                <h2 class="cs-card_title">{{ $service->service_category_title }}</h2>
                                </div>
                            </a>
                            </div>
                            <div class="cs-height_0 cs-height_lg_30"></div>
                        </div>
                    @endif
                @endfor
            <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
                @for ($i = 6; $i < 7; $i++)
                    @php
                        $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                    @endphp
                    @if ($service)
                        <div class="col-lg-3 col-sm-6">
                            <div class="cs-hobble">
                            <a href="{{ route('service.details', ['id' => $service->id, 'slug' => $service->service_category_slug]) }}" class="cs-card cs-style1 cs-hover_layer1">
                                @php
                                    $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                    $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    $preImagePath = 'preImage/service_category_thumbnail/'.$service->service_category_thumbnail;
                                    $preImageExists = file_exists(public_path($preImagePath));
                                @endphp
                                @if ($service->service_category_thumbnail && $folderExists)
                                    <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @elseif ($service->service_category_thumbnail && $preImageExists)
                                    <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}">
                                @else
                                    <img src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
                                @endif
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                <h2 class="cs-card_title">{{ $service->service_category_title }}</h2>
                                </div>
                            </a>
                            </div>
                            <div class="cs-height_0 cs-height_lg_30"></div>
                        </div>
                    @endif
                @endfor
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <div class="cs-height_150 cs-height_lg_50"></div>

  <!-- Start Pricing Plan -->
  <x-frontend.pricingplan.pricingplan />
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
