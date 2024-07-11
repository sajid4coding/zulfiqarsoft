<div class="sidebar-wrapper sidebar-theme">

    @php
        $url = url()->current();
        $explode = explode('/', $url);
        $current_page = end($explode);
        $lastTwoWords = $explode[count($explode)-2] . '/' . $explode[count($explode)-1];
        $lastthreeWords = $explode[count($explode)-3]. '/' . $explode[count($explode)-2] . '/'. $explode[count($explode)-1];
    @endphp

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('dashboard.analytics') }}">
                        {{-- <img src="{{ asset('storage/general_images/logo') }}/{{ logo() }}" class="navbar-logo" alt="logo"> --}}
                        @php
                            $filePath = 'favicon/' . favicon();
                            $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                        @endphp
                        @if (favicon() && $folderExists)
                            <img src="{{ asset('storage/general_images/favicon') }}/{{ favicon() }}" alt="logo">
                        @else
                            <img src="{{ asset('preImage/favicon/'.favicon()) }}" alt="logo">
                        @endif
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('dashboard.analytics') }}" class="nav-link"> Zulfiqar </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{ route('index') }}" aria-expanded="false" class="dropdown-toggle" target="_blank">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        <span>Visit Website</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ $lastTwoWords == 'dashboard/analytics' || $lastTwoWords == 'dashboard/sales' ? 'active' : '' }}">
                <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="{{ $lastTwoWords == 'dashboard/analytics' || $lastTwoWords == 'dashboard/sales' ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastTwoWords == 'dashboard/analytics' || $lastTwoWords == 'dashboard/sales' ? 'show' : '' }}" id="dashboard" data-bs-parent="#accordionExample">
                    <li class="{{ $lastTwoWords == 'dashboard/analytics' ? 'active' : '' }}">
                        <a href="{{ route('dashboard.analytics') }}"> Analytics </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/sales' ? 'active' : '' }}">
                        <a href="{{ route('dashboard.sales') }}"> Sales</a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
            </li>

            <li class="menu @if ($current_page == 'general-setting' || $current_page == 'image-general-setting') active @endif">
                <a href="#general" data-bs-toggle="collapse" @if ($current_page == 'general-setting' || $current_page == 'image-general-setting') aria-expanded="true" @endif class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span>General Settings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled @if ($current_page == 'general-setting' || $current_page == 'image-general-setting') show @endif" id="general" data-bs-parent="#accordionExample">
                    <li class="@if ($current_page == 'general-setting') active @endif">
                        <a href="{{ route('general.setting') }}"> General Settings </a>
                    </li>
                    <li class="@if ($current_page == 'image-general-setting') active @endif">
                        <a href="{{ route('image.general.setting') }}"> General Images </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $current_page == 'global-setting' ? 'active' : '' }}">
                <a href="{{route('global.setting')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                        <span>Global Settings</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="./app-calendar.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Calendar</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="./app-chat.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Chat</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/about/about-agency' || $lastthreeWords == 'dashboard/about/why-choose' || $lastTwoWords == 'dashboard/our-funfact' ? 'active' : '' }}">
                <a href="#about" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/about/about-agency' || $lastthreeWords == 'dashboard/about/why-choose' || $lastTwoWords == 'dashboard/our-funfact' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        <span>About</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/about/about-agency' || $lastthreeWords == 'dashboard/about/why-choose' || $lastTwoWords == 'dashboard/our-funfact' ? 'show' : '' }}" id="about" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/about/about-agency' ? 'active' : '' }}">
                        <a href="{{ route('dashboard.about.agency') }}"> About Agency </a>
                    </li>
                    <li class="{{ $lastthreeWords == 'dashboard/about/why-choose' ? 'active' : '' }}">
                        <a href="{{ route('dashboard.why.choose') }}"> Why Choose Us </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/our-funfact' ? 'active' : '' }}">
                        <a href="{{ route('funfact') }}"> FunFact </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="./app-notes.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>Notes</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ $current_page == 'contact' ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Contacts</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#!" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <span>Subscription</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/serviceCategory/create' || $lastTwoWords == 'dashboard/serviceCategory' ? 'active' : '' }}">
                <a href="#serviceCategory" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/serviceCategory/create' || $lastTwoWords == 'dashboard/serviceCategory' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                        <span>Service Category</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/serviceCategory/create' || $lastTwoWords == 'dashboard/serviceCategory' ? 'show' : '' }}" id="serviceCategory" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/serviceCategory/create' ? 'active' : '' }}">
                        <a href="{{ route('serviceCategory.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/serviceCategory' ? 'active' : '' }}">
                        <a href="{{ route('serviceCategory.index') }}"> List </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/service/create' || $lastTwoWords == 'dashboard/service' ? 'active' : '' }}">
                <a href="#service" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/service/create' || $lastTwoWords == 'dashboard/service' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span>Service</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/service/create' || $lastTwoWords == 'dashboard/service' ? 'show' : '' }}" id="service" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/service/create' ? 'active' : '' }}">
                        <a href="{{ route('service.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/service' ? 'active' : '' }}">
                        <a href="{{ route('service.index') }}"> List </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/portfolio/create' || $lastTwoWords == 'dashboard/portfolio'  ? 'active' : '' }}">
                <a href="#portfolio" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/portfolio/create' || $lastTwoWords == 'dashboard/portfolio' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <span>Portfolio</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/portfolio/create' || $lastTwoWords == 'dashboard/portfolio' ? 'show' : '' }}" id="portfolio" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/portfolio/create' ? 'active' : '' }}">
                        <a href="{{ route('portfolio.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/portfolio' ? 'active' : '' }}">
                        <a href="{{ route('portfolio.index') }}"> List </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/blog/create' || $lastTwoWords == 'dashboard/blog' ? 'active' : '' }}">
                <a href="#blog" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/blog/create' || $lastTwoWords == 'dashboard/blog' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                        <span>Blog</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/blog/create' || $lastTwoWords == 'dashboard/blog' || $lastTwoWords == 'dashboard/blog-comments' ? 'show' : '' }}" id="blog" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/blog/create' ? 'active' : '' }}">
                        <a href="{{ route('blog.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/blog' ? 'active' : '' }}">
                        <a href="{{ route('blog.index') }}"> List </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/blog-comments' ? 'active' : '' }}">
                        <a href="{{ route('blog.comments') }}"> Blog Comments </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/team/create' || $lastTwoWords == 'dashboard/team' ? 'active' : '' }}">
                <a href="#team" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/team/create' || $lastTwoWords == 'dashboard/team' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        <span>Team</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/team/create' || $lastTwoWords == 'dashboard/team' ? 'show' : '' }}" id="team" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/team/create' ? 'active' : '' }}">
                        <a href="{{ route('team.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/team' ? 'active' : '' }}">
                        <a href="{{ route('team.index') }}"> List </a>
                    </li>
                </ul>
            </li>
            <li class="menu {{ $lastthreeWords == 'dashboard/testimonial/create' || $lastTwoWords == 'dashboard/testimonial' ? 'active' : '' }}">
                <a href="#testimonial" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/testimonial/create' || $lastTwoWords == 'dashboard/testimonial' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                        <span>Testimonial</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/testimonial/create' || $lastTwoWords == 'dashboard/testimonial' ? 'show' : '' }}" id="testimonial" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/testimonial/create' ? 'active' : '' }}">
                        <a href="{{ route('testimonial.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/testimonial' ? 'active' : '' }}">
                        <a href="{{ route('testimonial.index') }}"> List </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER INTERFACE</span></div>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/companylogo/create' || $lastTwoWords == 'dashboard/companylogo' || $lastTwoWords == 'dashboard/companylogo-text' ? 'active' : '' }}">
                <a href="#companylogo" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/companylogo/create' || $lastTwoWords == 'dashboard/companylogo' || $lastTwoWords == 'dashboard/companylogo-text' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                        <span>Company Logos</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/companylogo/create' || $lastTwoWords == 'dashboard/companylogo' || $lastTwoWords == 'dashboard/companylogo-text' ? 'show' : '' }}" id="companylogo" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/companylogo/create' ? 'active' : '' }}">
                        <a href="{{ route('companylogo.create') }}"> Create </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/companylogo' ? 'active' : '' }}">
                        <a href="{{ route('companylogo.index') }}"> List </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/companylogo-text' ? 'active' : '' }}">
                        <a href="{{ route('companylogo.text') }}"> Moving Text </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ $lastthreeWords == 'dashboard/pages/terms-of-conditions' || $lastthreeWords == 'dashboard/pages/privacy-policy' ? 'active' : '' }}">
                <a href="#pages" data-bs-toggle="collapse" aria-expanded="{{ $lastthreeWords == 'dashboard/pages/terms-of-conditions' || $lastthreeWords == 'dashboard/pages/privacy-policy' ? 'true' : '' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>Pages</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastthreeWords == 'dashboard/pages/terms-of-conditions' || $lastthreeWords == 'dashboard/pages/privacy-policy' ? 'show' : '' }}" id="pages" data-bs-parent="#accordionExample">
                    <li class="{{ $lastthreeWords == 'dashboard/pages/terms-of-conditions' ? 'active' : '' }}">
                        <a href="{{ route('tac') }}"> Terms and Conditions </a>
                    </li>
                    <li class="{{ $lastthreeWords == 'dashboard/pages/privacy-policy' ? 'active' : '' }}">
                        <a href="{{ route('pp') }}"> Privacy Policy </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#components" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span>Components</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./component-tabs.html"> Tabs </a>
                    </li>
                    <li>
                        <a href="./component-accordion.html"> Accordions  </a>
                    </li>
                    <li>
                        <a href="./component-modal.html"> Modals </a>
                    </li>
                    <li>
                        <a href="./component-cards.html"> Cards </a>
                    </li>
                    <li>
                        <a href="./component-bootstrap-carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="./component-splide.html">Splide</a>
                    </li>
                    <li>
                        <a href="./component-sweetalert.html"> Sweet Alerts </a>
                    </li>
                    <li>
                        <a href="./component-timeline.html"> Timeline </a>
                    </li>
                    <li>
                        <a href="./component-notifications.html"> Notifications </a>
                    </li>
                    <li>
                        <a href="./component-media-object.html"> Media Object </a>
                    </li>
                    <li>
                        <a href="./component-list-group.html"> List Group </a>
                    </li>
                    <li>
                        <a href="./component-pricing-table.html"> Pricing Tables </a>
                    </li>
                    <li>
                        <a href="./component-lightbox.html"> Lightbox </a>
                    </li>
                    <li>
                        <a href="./component-drag-drop.html"> Drag and Drop </a>
                    </li>
                    <li>
                        <a href="./component-fonticons.html"> Font Icons </a>
                    </li>
                    <li>
                        <a href="./component-flags.html"> Flag Icons </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>Elements</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./element-alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="./element-avatar.html"> Avatar </a>
                    </li>
                    <li>
                        <a href="./element-badges.html"> Badges </a>
                    </li>
                    <li>
                        <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                    </li>
                    <li>
                        <a href="./element-buttons.html"> Buttons </a>
                    </li>
                    <li>
                        <a href="./element-buttons-group.html"> Button Groups </a>
                    </li>
                    <li>
                        <a href="./element-color-library.html"> Color Library </a>
                    </li>
                    <li>
                        <a href="./element-dropdown.html"> Dropdown </a>
                    </li>
                    <li>
                        <a href="./element-infobox.html"> Infobox </a>
                    </li>
                    <li>
                        <a href="./element-loader.html"> Loader </a>
                    </li>
                    <li>
                        <a href="./element-pagination.html"> Pagination </a>
                    </li>
                    <li>
                        <a href="./element-popovers.html"> Popovers </a>
                    </li>
                    <li>
                        <a href="./element-progressbar.html"> Progress Bar </a>
                    </li>
                    <li>
                        <a href="./element-search.html"> Search </a>
                    </li>
                    <li>
                        <a href="./element-tooltips.html"> Tooltips </a>
                    </li>
                    <li>
                        <a href="./element-treeview.html"> Treeview </a>
                    </li>
                    <li>
                        <a href="./element-typography.html"> Typography </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="./map-leaflet.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>Maps</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="./charts-apex.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                        <span>Charts</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#layouts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                        <span>Layouts</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="layouts" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./layout-blank-page.html"> Blank Page </a>
                    </li>
                    <li>
                        <a href="./layout-empty.html"> Empty Page </a>
                    </li>
                    <li>
                        <a href="./layout-full-width.html"> Full Width </a>
                    </li>
                    <li>
                        <a href="./layout-collapsible-menu.html"> Collapsed Menu </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>TABLES AND FORMS</span></div>
            </li>

            <li class="menu {{ $current_page == 'newsletter' ? 'active' : '' }}">
                <a href="{{route('newsletter')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <span>Newsletter</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER AND PAGES</span></div>
            </li>

            <li class="menu {{ $lastTwoWords == 'dashboard/profile' || $lastTwoWords == 'dashboard/account-setting' ? 'active' : '' }}">
                <a href="#users" data-bs-toggle="collapse" aria-expanded="{{ $lastTwoWords == 'dashboard/profile' || $lastTwoWords == 'dashboard/account-setting' ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Users</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ $lastTwoWords == 'dashboard/profile' || $lastTwoWords == 'dashboard/account-setting' ? 'show' : '' }}" id="users" data-bs-parent="#accordionExample">
                    <li class="{{ $lastTwoWords == 'dashboard/profile' ? 'active' : '' }}">
                        <a href="{{ route('profile') }}"> Profile </a>
                    </li>
                    <li class="{{ $lastTwoWords == 'dashboard/account-setting' ? 'active' : '' }}">
                        <a href="{{ route('account.setting') }}"> Account Settings </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
