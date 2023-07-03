@extends('layouts.dashboardmaster')

@section('dashboard_header_css')
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
                    <li class="breadcrumb-item"><a href="{{ route('general.setting') }}">General Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Images</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <form action="{{ route('image.general.setting.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row layout-top-spacing">
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            Favicon Image
                        </div>
                        <div class="card-body">
                            @if ($general_setting->favicon)
                                <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>Notice!</strong> Favicon Image Uploaded.
                                </div>
                            @endif
                            <canvas id= "canv1" ></canvas>
                            <p>
                            Filename:
                            <input name="favicon" type="file" multiple="false" accept="image/*" id="finput" onchange="upload()">
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <!-- Outline -->
                                <button class="btn btn-outline-primary my-4" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            Global Logo
                        </div>
                        <div class="card-body">
                            @if ($general_setting->logo)
                                <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>Notice!</strong> Logo Uploaded.
                                </div>
                            @endif
                            <canvas id= "canv2" ></canvas>
                            <p>
                            Filename:
                            <input name="logo" type="file" multiple="false" accept="image/*" id="finput2" onchange="upload1()">
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <!-- Outline -->
                                <button class="btn btn-outline-primary my-4" type="submit">Update</button>
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
        var imgcanvas = document.getElementById("canv1");
        var fileinput = document.getElementById("finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>
    <script>
        function upload1() {
        var imgcanvas = document.getElementById("canv2");
        var fileinput = document.getElementById("finput2");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>
@endsection
