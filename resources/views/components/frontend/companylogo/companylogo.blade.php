<!-- End Moving Text -->
<div class="cs-moving_text_wrap cs-bold cs-primary_font">
    <div class="cs-moving_text_in">
    <div class="cs-moving_text">{{ $movingText }}</div>
    </div>
</div>
<div class="cs-height_100 cs-height_lg_70"></div>
<!-- Start Partner Logo -->
<div class="container">
    <div class="cs-partner_logo_wrap">
    @foreach ($companyLogos as $companyLogo)
        <div class="cs-partner_logo">
            <img width="100px" src="{{ asset('storage') }}/companyLogo/{{$companyLogo->companyLogo}}" alt="Company Logo" />
        </div>
    @endforeach
    </div>
</div>
<!-- End Partner Logo -->
