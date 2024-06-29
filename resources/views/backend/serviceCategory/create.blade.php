@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/filepond.min.css">
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/src/tagify/tagify.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/light/forms/switches.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/tagify/custom-tagify.css">
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                        <li class="breadcrumb-item"><a href="{{ route('serviceCategory.index') }}">Service Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <form action="{{ route('serviceCategory.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        @if (session('uploadSucess'))
                            <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>Notice!</strong> {{ session('uploadSucess') }}.
                            </div>
                        @endif

                        <div class="widget-content widget-content-area blog-create-section">

                            <div class="row my-4">
                                <div class="col-sm-12">
                                    <label for="serviceCategory">Service Category Name</label>
                                    <input type="text" class="form-control" placeholder="Service Category Title" name="service_category_title">
                                </div>
                                <div class="col-xxl-12 col-md-12 mt-4">
                                    <canvas id="service_category_thumbnail"></canvas>
                                    <p>
                                    Filename:
                                    <input name="service_category_thumbnail" type="file" multiple="false" accept="image/*" id="service_category_finput" onchange="upload()">
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            @if ($serviceCategoriesCount < 6)
                                <div class="row">
                                    <div class="col-xxl-12 mb-4">
                                        <div class="switch form-switch-custom switch-inline form-switch-primary">
                                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked="" name="service_category_status">
                                            <label class="switch-label" for="showPublicly">Publish</label>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                        <button type="submit" class="btn btn-success w-100">Create Service Category</button>
                                    </div>

                                </div>
                            @else
                                <small style="color: red;">You can upload only 6 Service Categories. Now You can't upload services</small>
                            @endif
                        </div>
                    </div>

                </div>
            </form>

        </div>

    </div>
@endsection

@section('dashboard_footer_script')
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script>
    function upload() {
    var imgcanvas = document.getElementById("service_category_thumbnail");
    var fileinput = document.getElementById("service_category_finput");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
    }
</script>
@endsection



