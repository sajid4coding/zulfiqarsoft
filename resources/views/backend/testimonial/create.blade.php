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
                    <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Testimonial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-spacing ">

            <!-- Content -->
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Type Testimonial</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-6 my-2">
                                        <input name="client_name" type="text" class="form-control" placeholder="Client Name" >
                                        @error('client_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6 my-2">
                                        <input name="client_position" type="text" class="form-control" placeholder="Client Position" >
                                        @error('client_position')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 my-2">
                                        <textarea class="form-control" name="client_message" cols="30" rows="10" placeholder="Client Message"></textarea>
                                        @error('client_message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xxl-12 col-md-12 mt-4 mb-4">
                                        <canvas id= "canv1" ></canvas>
                                        <p>
                                        Filename:
                                        <input name="client_image" type="file" multiple="false" accept="image/*" id="finput" onchange="upload()">
                                        </p>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <!-- Outline -->
                                    <button class="btn btn-outline-primary mb-4" type="type">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
@section('dashboard_footer_script')
<script>
    function upload() {
    var imgcanvas = document.getElementById("canv1");
    var fileinput = document.getElementById("finput");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
    }
</script>
@endsection
