@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/pages/faq.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/pages/faq.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/light/forms/switches.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/tagify/custom-tagify.css">
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<style>
    p {
    font-size: 12pt;
    color: black;
    }
    canvas {
    height: 175px;
    border-style: solid;
    border-width: 1px;
    border-color: rgb(255, 255, 255);
    }

    input {
    font-family: verdana;
    font-size: 12pt;
    }
</style>
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
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row mb-4 layout-spacing layout-top-spacing">

            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    @if (session('update_service'))
                        <div class="alert alert-primary alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('update_service') }}.
                        </div>
                    @endif
                    @if (session('service_step_delete'))
                        <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('service_step_delete') }}.
                        </div>
                    @endif
                    @if (session('include_service_delete'))
                        <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('include_service_delete') }}.
                        </div>
                    @endif
                    @if (session('service_faq_delete'))
                        <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('service_faq_delete') }}.
                        </div>
                    @endif

                    {{-- <div class="widget-content widget-content-area blog-create-section">

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
                                        <div class="card">
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
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div> --}}

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h2 class="text-center" style="font-size: 25px; font-weight: 700; margin-bottom: 45px; letter-spacing: 0px; text-align: center; color: #bfc9d4;">About<span style="color: #009688;"> Service</span></h2>

                        <textarea id="serviceDescription" class="form-control" name="serviceDescription" cols="30" rows="10" placeholder="Service Description">{{ $service->serviceDescription }}</textarea>

                    </div>

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h2 class="text-center" style="font-size: 25px; font-weight: 700; margin-bottom: 45px; letter-spacing: 0px; text-align: center; color: #bfc9d4;">Project<span style="color: #009688;"> Step</span> <small>(Optional)</small></h2>

                        <div id="req_input" class="datainputs">
                            @foreach ($serviceSteps as $serviceStep)
                                <div class="required_inp">
                                    <input class="form-control my-1" name="stepTitle[]" placeholder="Step Title" type="text" value="{{$serviceStep->stepTitle}}">
                                    <textarea class="form-control my-1" name="stepDescription[]" placeholder="Step Description" cols="10" rows="2"> {{$serviceStep->stepDescription}} </textarea>
                                </div>
                                <a href="{{ route('service.step.delete', $serviceStep->id) }}" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </a>
                            @endforeach
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="#" id="addmore" class="add_input btn btn-primary my-2">Add more</a>
                        </div>

                    </div>

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h2 class="text-center" style="font-size: 25px; font-weight: 700; margin-bottom: 45px; letter-spacing: 0px; text-align: center; color: #bfc9d4;">Project Include<span style="color: #009688;"> Service </span> <small>(Optional)</small></h2>

                        <div id="req_input_service" class="datainputs">
                            @foreach ($includeServices as $includeService)
                                <div class="required_inp_service">
                                    <input class="form-control my-1" name="includeserviceName[]" placeholder="Include Service Name" type="text" value=" {{$includeService->includeserviceName}} ">
                                </div>
                                <a href="{{ route('include.service.delete', $includeService->id) }}" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </a>
                            @endforeach
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="#" id="addmoreservice" class="add_input btn btn-primary my-2">Add more</a>
                        </div>

                    </div>

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h2 class="text-center" style="font-size: 25px; font-weight: 700; margin-bottom: 45px; letter-spacing: 0px; text-align: center; color: #bfc9d4;">Service Related<span style="color: #009688;"> FAQ</span> <small>(Optional)</small></h2>

                        <div id="req_input_faq" class="datainputs">
                            @foreach ($serviceFAQs as $serviceFAQ)
                                <div class="required_inp_faq">
                                    <input class="form-control my-1" name="faqQuestion[]" placeholder="FAQ Question" type="text" value=" {{$serviceFAQ->faqQuestion}} ">
                                    <textarea class="form-control my-1" name="faqAnswer[]" placeholder="FAQ Answer" cols="10" rows="2">{{$serviceFAQ->faqAnswer}}</textarea>
                                    <a href="{{ route('service.faq.delete', $serviceFAQ->id) }}" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="#" id="addmorefaq" class="add_input btn btn-primary my-2">Add more</a>
                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">
                                <div class="col-xxl-12 mb-4">
                                        <div id="req_input_faq" class="datainputs">
                                            <div class="mb-4">
                                                <label>Select Service Category*</label>
                                                <input disabled class="form-control my-1" type="text" value="{{ $service->relationshipwithServiceCategory->service_category_title }}">
                                                <small style="color: red;">Service Category Not Editable</small>
                                                <small></small>
                                            </div>
                                        </div>
                                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                                        <input class="switch-input" type="checkbox" role="switch" id="showPublicly" {{$service->serviceStatus == 'on' ? 'checked' : ''}} name="serviceStatus">
                                        <label class="switch-label" for="showPublicly">Publish</label>
                                    </div>
                                </div>

                                {{-- <div class="col-xxl-12 col-md-12 mb-4">
                                    <canvas id="serviceThumbnail"></canvas>
                                    <p>
                                    Filename:
                                    <input name="serviceThumbnail" type="file" multiple="false" accept="image/*" id="serviceThumbnail_finput" onchange="upload()">
                                    </p>
                                </div> --}}
                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success w-100">Update Service</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>
@endsection
@section('dashboard_footer_script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#serviceDescription').summernote({
            placeholder: 'type description...',
            height: 300,
        });
    });
</script>

<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>

<script>
    function upload() {
    var imgcanvas = document.getElementById("serviceThumbnail");
    var fileinput = document.getElementById("serviceThumbnail_finput");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
    }
</script>



<script>
    // PROJECT STEP
    $(document).ready(function() {
        $("#addmore").click(function() {
            $("#req_input").append('<div class="required_inp"><input class="form-control my-1" name="stepTitle[]" placeholder="Step Title" type="text"><textarea class="form-control my-1" name="stepDescription[]" placeholder="Step Description" cols="10" rows="2"></textarea>' + '<input type="button" class="inputRemove btn btn-warning my-2" value="Remove"/></div>');
        });
        $('body').on('click','.inputRemove',function() {
            $(this).parent('div.required_inp').remove()
        });
    });

    // PROJECT INCLUDE SERVICE
    $(document).ready(function() {
        $("#addmoreservice").click(function() {
            $("#req_input_service").append('<div class="required_inp_service"><input class="form-control my-1" name="includeserviceName[]" placeholder="Include Service Name" type="text">' + '<input type="button" class="inputRemove btn btn-warning my-2" value="Remove"/></div>');
        });
        $('body').on('click','.inputRemove',function() {
            $(this).parent('div.required_inp_service').remove()
        });
    });

    // PROJECT FAQ
    $(document).ready(function() {
        $("#addmorefaq").click(function() {
            $("#req_input_faq").append('<div class="required_inp_faq"><input class="form-control my-1" name="faqQuestion[]" placeholder="FAQ Question" type="text"><textarea class="form-control my-1" name="faqAnswer[]" placeholder="FAQ Answer" cols="10" rows="2"></textarea>' + '<input type="button" class="inputRemove btn btn-warning my-2" value="Remove"/></div>');
        });
        $('body').on('click','.inputRemove',function() {
            $(this).parent('div.required_inp_faq').remove()
        });
    });
</script>

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

