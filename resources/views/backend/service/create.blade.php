@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/pages/faq.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/pages/faq.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
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
                    <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row mb-4 layout-spacing layout-top-spacing">

            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="widget-content widget-content-area blog-create-section">

                    <div class="faq">

                        <div class="faq-layouting layout-spacing">

                            <div class="fq-tab-section">
                                <h2>Project <span>Steps</span></h2>

                                <div class="accordion" id="simple_faq">
                                    <div class="card">
                                        <div class="card-header" id="fqheadingOne">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                                <span class="faq-q-title">Getting started</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="card">
                                        <div class="card-header" id="fqheadingTwo">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo" aria-expanded="true" aria-controls="fqcollapseTwo">
                                                <span class="faq-q-title">How can I unzip product files</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseTwo" class="collapse show" aria-labelledby="fqheadingTwo" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="fqheadingThree">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree" aria-expanded="false" aria-controls="fqcollapseThree">
                                                <span class="faq-q-title">Sidebar not rendering CSS</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="fqheadingFour">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour" aria-expanded="false" aria-controls="fqcollapseFour">
                                                <span class="faq-q-title">Production Level Built</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseFour" class="collapse" aria-labelledby="fqheadingFour" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="fqheadingFive">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive" aria-expanded="false" aria-controls="fqcollapseFive">
                                                <span class="faq-q-title">Compilation Issue</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="fqheadingSix">
                                            <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix" aria-expanded="false" aria-controls="fqcollapseSix">
                                                <span class="faq-q-title">Getting started with starter kits</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                        <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix" data-bs-parent="#simple_faq">
                                            <div class="card-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success text-center my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Step</button>
                                </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Project Step Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg> ... </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST">
                                                        <label class="form-label text-white-50" for="stepTitle">Step Title</label>
                                                        <input id="stepTitle" name="stepTitle" class="form-control" type="text" placeholder="Step Title">
                                                        <label class="form-label text-white-50 mt-3" for="stepTitle">Step Description</label>
                                                        <textarea name="stepDescription" class="form-control" type="text" placeholder="Step Description" cols="30" rows="10"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
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
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('dashboard_assets') }}/src/assets/js/pages/faq.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script>

    function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
        var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
            keyboard: false
        })
        document.querySelector(btnSelector).addEventListener('click', function() {
            var src = videoSource;
            myModal.show('show');
            var ifrm = document.createElement("iframe");
            ifrm.setAttribute("src", src);
            ifrm.setAttribute('width', iframeWidth);
            ifrm.setAttribute('height', iframeHeight);
            ifrm.style.border = "0";
            ifrm.setAttribute("allow", "encrypted-media");
            document.querySelector(iframeContainer).appendChild(ifrm);
        })
    }

    addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

    addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')

</script>
<!--  END CUSTOM SCRIPT FILE  -->
@endsection
