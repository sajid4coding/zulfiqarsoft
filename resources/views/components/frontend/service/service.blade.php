<section id="service">
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
    <div class="row">
        <div class="col-xl-4">
        <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">What Can We Do</h3>
            <h2 class="cs-section_title">Services we can help you with</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href="{{ route('service') }}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
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
                    @for ($i = 1; $i < 2; $i++)
                        @php
                            $service = App\models\ServiceCategory::where('service_category_status','on')->find($i)
                        @endphp
                        @if ($service)
                            <div class="col-lg-3 col-sm-6">
                                <div class="cs-hobble">
                                <a href="{{ route('service.details', $service->id) }}" class="cs-card cs-style1 cs-hover_layer1">
                                    @php
                                         $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                         $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    @endphp
                                    @if ($service->service_category_thumbnail && $folderExists)
                                        <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
                                    @else
                                        <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
                                    @endif
                                    <div class="cs-card_overlay"></div>
                                    <div class="cs-card_info">
                                    <span class=" cs-hover_layer3 cs-accent_bg"></span>
                                    <h2 class="cs-card_title">{{ $service->service_category_title }} </h2>
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
                                <a href="{{ route('service.details', $service->id) }}" class="cs-card cs-style1 cs-hover_layer1">
                                    @php
                                         $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                         $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    @endphp
                                    @if ($service->service_category_thumbnail && $folderExists)
                                        <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
                                    @else
                                        <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
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
                                <a href="{{ route('service.details', $service->id) }}" class="cs-card cs-style1 cs-hover_layer1">
                                    @php
                                         $filePath = 'service_category_thumbnail/' . $service->service_category_thumbnail;
                                         $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                    @endphp
                                    @if ($service->service_category_thumbnail && $folderExists)
                                        <img src="{{ asset('storage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
                                    @else
                                        <img src="{{ asset('preImage/service_category_thumbnail/'.$service->service_category_thumbnail) }}" alt="{{ $service->service_category_title }}" width="500px" height="500px">
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
                                <a href="{{ route('service.details', $service->id) }}" class="cs-card cs-style1 cs-hover_layer1">
                                    <img src="@if ($service->service_category_thumbnail) {{ asset('storage') }}/service_category_thumbnail/{{ $service->service_category_thumbnail }} @else {{ asset('storage') }}/service_category_thumbnail/nullImage.jpg @endif" alt="Service" width="500px" height="500px">

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
                                <a href="{{ route('service.details', $service->id) }}" class="cs-card cs-style1 cs-hover_layer1">
                                    <img src="@if ($service->service_category_thumbnail) {{ asset('storage') }}/service_category_thumbnail/{{ $service->service_category_thumbnail }} @else {{ asset('storage') }}/service_category_thumbnail/nullImage.jpg @endif" alt="Service" width="500px" height="500px">

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
    <div class="cs-height_150 cs-height_lg_50"></div>
</section>
