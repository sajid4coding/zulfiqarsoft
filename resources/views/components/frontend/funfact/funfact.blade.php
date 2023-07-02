@php
    $url = url()->current();
    $explode = explode('/', $url);
    $current_page = end($explode);
@endphp
<section>
    <div class="container">
    <div class="cs-funfact_wrap {{ $current_page == 'about' ? '' : 'cs-type1' }}">
        <div class="cs-funfact_shape" data-src="{{ asset('frontend_assets') }}/img/funfact_shape_bg.svg"></div>
        <div class="cs-funfact_left">
        <div class="cs-funfact_heading">
            <h2>{{ $funfact->heading_title }}</h2>
            <p> {{ $funfact->heading_description }} </p>
        </div>
        </div>
        <div class="cs-funfact_right">
        <div class="cs-funfacts">
            <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                <span data-count-to="{{ $funfact->happy_client }}" class="odometer"></span>
                {{-- <span data-count-to="40" class="odometer"></span>K --}}
            </div>
            <div class="cs-funfact_text">
                <span class="cs-accent_color">+</span>
                <p>Global Happy Clients</p>
            </div>
            </div>
            <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                <span data-count-to="{{ $funfact->completed_project }}" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
                <span class="cs-accent_color">+</span>
                <p>Project Completed</p>
            </div>
            </div>
            <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                <span data-count-to="{{ $funfact->team_member }}" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
                {{-- <span class="cs-accent_color">+</span> --}}
                <p>Team Members</p>
            </div>
            </div>
            <div class="cs-funfact cs-style1">
            <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                <span data-count-to="{{ $funfact->our_services }}" class="odometer"></span>
            </div>
            <div class="cs-funfact_text">
                <span class="cs-accent_color">+</span>
                <p>Our Services</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
