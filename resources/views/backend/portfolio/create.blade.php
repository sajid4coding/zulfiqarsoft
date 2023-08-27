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
                        <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
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

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Portfolio Title</label>
                                    <input type="text" class="form-control" id="post-title" placeholder="Portfolio Title" name="portfolio_title">
                                </div>
                                @error('portfolio_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Portfolio Description</label>
                                    <textarea id="summernote" class="form-control" name="portfolio_description" cols="30" rows="10" placeholder="Portfolio Description"></textarea>
                                </div>
                                @error('portfolio_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">SEO Settings</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <label for="post-meta-description">Meta Title</label>
                                    <input type="text" class="form-control" id="post-meta-title" placeholder="Meta Title" name="portfolio_meta_title">
                                </div>
                                <div class="col-xxl-12">
                                    <label for="post-meta-description">Meta Description</label>
                                    <textarea class="form-control" id="post-meta-description" cols="10" rows="5" placeholder="Meta Description" name="portfolio_meta_description"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">Addition Information</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <input type="url" class="form-control" id="post-meta-title" placeholder="Portfolio URL" name="portfolio_url">
                                </div>

                                <div class="col-6 my-2">
                                    <label for="basicFlatpickr" class="text-white">From</label>
                                    <div class="form-group mb-0">
                                        <input name="project_start_from" id="basicFlatpickr" value="2022-09-04" class="form-control flatpickr flatpickr-input active" type="date" placeholder="Select Date..">
                                    </div>
                                    @error('portfolio_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-6 my-2">
                                    <label for="dateTimeFlatpickr" class="text-white">To</label>
                                    <div class="form-group mb-0">
                                        <input name="project_end_to" id="dateTimeFlatpickr" value="0000-00-00" class="form-control flatpickr flatpickr-input active" type="date" placeholder="Select Date..">
                                    </div>
                                    @error('portfolio_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">
                                <div class="col-xxl-12 mb-4">
                                    <div class="switch form-switch-custom switch-inline form-switch-primary">
                                        <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked="" name="portfolio_status">
                                        <label class="switch-label" for="showPublicly">Publish</label>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <label for="category">Category</label>
                                    <select class="form-select" name="category" id="category" placeholder="Choose...">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->service_category_title }}</option>
                                        @endforeach

                                    </select>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <canvas id="portfolio_thumbnail"></canvas>
                                    <p>
                                    Filename:
                                    <input name="portfolio_thumbnail" type="file" multiple="false" accept="image/*" id="portfolio_thumbnail_finput" onchange="upload()">
                                    </p>
                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success w-100">Create Portfolio</button>
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

    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>

    <script>
        function upload() {
        var imgcanvas = document.getElementById("portfolio_thumbnail");
        var fileinput = document.getElementById("portfolio_thumbnail_finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>

    <script>
        var f1 = flatpickr(document.getElementById('basicFlatpickr'));
    </script>

    <script>
        var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
            enableTime: true,
            dateFormat: "Y-m-d",
        });
    </script>
@endsection

