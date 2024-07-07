@if ($globalSettingStatus->team_section == 'on')
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
                @foreach ($teams as $team)
                    <div class="cs-slide">
                        <div class="cs-team cs-style1">
                            <div class="cs-member_thumb">
                            @php
                                $filePath = 'member_images/' . $team->member_image;
                                $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                            @endphp
                            @if ($team->member_image && $folderExists)
                                <img src="{{ asset('storage/member_images/'.$team->member_image) }}" alt="{{ $team->member_image }}">
                            @else
                                <img src="{{ asset('preImage/member_images/'.$team->member_image) }}" alt="{{ $team->member_image }}">
                            @endif
                            <div class="cs-member_overlay"></div>
                            </div>
                            <div class="cs-member_info">
                            <h2 class="cs-member_name">
                                <a href="{{ route('team.detail', $team->name_slug) }}">{{ $team->name }}</a>
                            </h2>
                            <div class="cs-member_designation">{{ $team->position }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
            <!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
        </div>
        <!-- .cs-slider -->
        </div>
    </section>
@endif
