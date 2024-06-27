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
                    @if ($portfolio_exists)
                        <li>
                            <a href="{{ route('portfolio') }}" style="{{ $current_page == 'portfolio' ? 'color: #FF4A17' : ''}}">Portfolio</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('team') }}" style="{{ $current_page == 'team' ? 'color: #FF4A17' : ''}}"> Team </a>
                        </li>
                    @endif
                    @if ($blog_exists)
                        <li>
                            <a href="{{ route('blog') }}" style="{{ $current_page == 'blog' ? 'color: #FF4A17' : ''}}">Blog</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('contact') }}" style="{{ $current_page == 'contact' ? 'color: #FF4A17' : ''}}"> Contact </a>
                        </li>
                    @endif
                    @if ($portfolio_exists || $blog_exists)
                        <li class="menu-item-has-children">
                            <a href="#" style="{{ $current_page == 'contact' ? 'color: #FF4A17' : ''}}"> More </a>
                            <ul>
                                @if ($portfolio_exists)
                                    <li>
                                        <a href="{{ route('contact') }}" style="{{ $current_page == 'contact' ? 'color: #FF4A17' : ''}}"> Contact </a>
                                    </li>
                                @endif
                                @if ($blog_exists)
                                    <li>
                                        <a href="{{ route('team') }}" style="{{ $current_page == 'team' ? 'color: #FF4A17' : ''}}"> Team </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
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
