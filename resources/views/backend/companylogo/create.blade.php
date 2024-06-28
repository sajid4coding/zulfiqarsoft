@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
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
                    <li class="breadcrumb-item"><a href="{{ route('companylogo.index') }}">Company Logo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Logo Upload</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <form action="{{ route('companylogo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4 layout-spacing layout-top-spacing">

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">
                            <label>Upload Logo</label>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <canvas id="companyLogo"></canvas>
                                <p>
                                Filename:
                                <input name="companyLogo" type="file" multiple="false" accept="image/*" id="companyLogo_finput" onchange="upload()">
                                </p>
                                @error('companyLogo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button type="submit" class="btn btn-success w-100">Logo Upload</button>
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

    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>

    <script>
        function upload() {
        var imgcanvas = document.getElementById("companyLogo");
        var fileinput = document.getElementById("companyLogo_finput");
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
