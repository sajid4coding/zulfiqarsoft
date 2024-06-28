@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
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
                        <li class="breadcrumb-item" aria-current="page">Page</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $pp->page_title }}</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <form action="{{ route('pp.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        @if (session('updateSucess'))
                            <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                <strong>Notice!</strong> {{ session('updateSucess') }}.
                            </div>
                        @endif

                        <div class="widget-content widget-content-area blog-create-section">

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" id="post-title" placeholder="Page Title" name="page_title" value="{{ $pp->page_title }}">
                                </div>
                                @error('page_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Page Content</label>
                                    <textarea id="summernote" class="form-control" name="page_content" cols="30" rows="10" placeholder="Page Content">{{ $pp->page_content }}</textarea>
                                </div>
                                @error('page_content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">SEO Settings</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <label for="post-meta-content">Page Meta Title</label>
                                    <input type="text" class="form-control" id="post-meta-title" placeholder="Meta Title" name="page_meta_title" value="{{ $pp->page_meta_title }}">
                                </div>
                                <div class="col-xxl-12">
                                    <label for="post-meta-content">Page Meta Content</label>
                                    <textarea class="form-control" id="post-meta-content" cols="10" rows="5" placeholder="Meta content" name="page_meta_content">{{ $pp->page_meta_content }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">
                                <div class="col-xxl-12 mb-4">
                                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                                        <input class="switch-input" type="checkbox" role="switch" id="showPublicly" {{ $pp->page_status == 'on' ? 'checked' : '' }} name="page_status">
                                        <label class="switch-label" for="showPublicly">Publish</label>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success w-100">Update</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>

    </div>

@endsection
@section('dashboard_footer_script')

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'type description...',
                height: 300,
            });
        });
    </script>
@endsection
