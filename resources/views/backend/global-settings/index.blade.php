@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/plugins/src/sweetalerts2/sweetalerts2.css">

<link href="{{ asset('dashboard_assets') }}/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/light/forms/switches.css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />



<link href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/elements/alert.css">
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/forms/switches.css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />

<!--  END CUSTOM STYLE FILE  -->
@endsection
@section('dashboard_content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Global Settings</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="tab-content" id="animateLineContent-4">
                    <div class="tab-pane fade show active" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Testimonial Section</h6>
                                        <p>Enable <span class="text-success">Testimonial</span> section </p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="testimonial_status" action="{{ route('change.testimonial.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->testimonial_section == 'on')
                                                        <input onclick="submittestimonialStatus()" name="testimonial_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submittestimonialStatus()" name="testimonial_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Show Pricing Plan</h6>
                                        <p>Enable <span class="text-success">Pricing Plan</span> section </p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="subcription_status" action="{{ route('change.subcription.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->subscription_section == 'on')
                                                        <input onclick="submitSubcription()" name="subcription_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submitSubcription()" name="subcription_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Show Portfolio Section</h6>
                                        <p>Enable <span class="text-success">Portfolio</span> section </p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="portfolio_status" action="{{ route('change.portfolio.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->portfolio_section == 'on')
                                                        <input onclick="submitPortfolioSection()" name="portfolio_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submitPortfolioSection()" name="portfolio_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Show Team Section</h6>
                                        <p>Enable <span class="text-success">Team</span> section </p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="team_status" action="{{ route('change.team.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->team_section == 'on')
                                                        <input onclick="submiteTeamSection()" name="team_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submiteTeamSection()" name="team_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Show Blog Section</h6>
                                        <p>Enable <span class="text-success">Blog</span> section </p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="blog_status" action="{{ route('change.blog.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->blog_section == 'on')
                                                        <input onclick="submitBlogSection()" name="blog_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submitBlogSection()" name="blog_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <h6 class="">Show Newsletter</h6>
                                        <p>Enable <span class="text-success">Newsletter</span></p>
                                        <div class="form-group mt-4">
                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                <form id="newsletter_status" action="{{ route('change.newsletter.status') }}" method="POST">
                                                    @csrf
                                                    @if ($globalSettingStatus->newsletter_section == 'on')
                                                        <input onclick="submitNewsletter()" name="newsletter_status" class="switch-input" type="checkbox" role="switch" checked>
                                                    @else
                                                        <input onclick="submitNewsletter()" name="newsletter_status" class="switch-input" type="checkbox" role="switch">
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection
@section('dashboard_footer_script')
<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/filepond.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/src/assets/js/users/account-settings.js"></script>


<script>

    function submitSubcription() {
        document.getElementById('subcription_status').submit();
    }

    function submittestimonialStatus() {
        document.getElementById('testimonial_status').submit();
    }

    function submitPortfolioSection() {
        document.getElementById('portfolio_status').submit();
    }

    function submiteTeamSection() {
        document.getElementById('team_status').submit();
    }

    function submitBlogSection() {
        document.getElementById('blog_status').submit();
    }

    function submitNewsletter() {
        document.getElementById('newsletter_status').submit();
    }

</script>

<!--  END CUSTOM SCRIPTS FILE  -->
@endsection
