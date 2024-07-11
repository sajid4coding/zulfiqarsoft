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
            @php
                $filePath = 'companyLogo/' . $companyLogo->companyLogo;
                $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                $preImagePath = 'preImage/companyLogo/'.$companyLogo->companyLogo;
                $preImageExists = file_exists(public_path($preImagePath));
            @endphp
            @if ($companyLogo->companyLogo && $folderExists)
                <img width="100px" src="{{ asset('storage/companyLogo/'.$companyLogo->companyLogo) }}" alt="{{ $companyLogo->companyLogo }}">
            @elseif ($companyLogo->companyLogo && $preImageExists)
                <img width="100px" src="{{ asset('preImage/companyLogo/'.$companyLogo->companyLogo) }}" alt="{{ $companyLogo->companyLogo }}">
            @else
                <img width="100px" src="{{ asset('preImage/nullImage/nullImage.jpg') }}" alt="nullImage.jpg">
            @endif
        </div>
    @endforeach
    </div>
</div>
<!-- End Partner Logo -->
