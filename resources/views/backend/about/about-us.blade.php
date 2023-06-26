@extends('layouts.dashboardmaster')
@section('dashboard_header_css')

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/forms/switches.css">

<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/light/apps/blog-create.css">
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/apps/blog-create.css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/editors/markdown/simplemde.min.css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/editors/markdown/simplemde.min.css">
<!--  END CUSTOM STYLE FILE  -->


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
                        <li class="breadcrumb-item active" aria-current="page">About Agency</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <form action="{{ route('dashboard.about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row mb-4 layout-spacing layout-top-spacing">

                    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="widget-content widget-content-area blog-create-section">

                            @if (session('update_status'))
                                <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>Notice!</strong> {{ session('update_status') }}.
                                </div>
                            @endif

                            <div class="row mb-4">
                                <h3 class="my-3"> \\ About Our Agency // </h3>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="post-title" placeholder="Heading Line" name="heading_line" value="{{ $about->heading_line ? $about->heading_line : '' }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Description</label>
                                    <textarea id="demo1" class="form-control" name="about" cols="30" rows="10">{{ $about->about ? $about->about : '' }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">SEO Settings</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <input type="text" class="form-control" placeholder="Meta Heading Title" name="heading_meta_line" value="{{ $about->heading_meta_line ? $about->heading_meta_line : '' }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>About Meta Description</label>
                                    <textarea id="demo2" class="form-control" name="about_meta_description" cols="30" rows="10">{{ $about->about_meta_description ? $about->about_meta_description : '' }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">

                                <div class="col-xxl-4 col-md-4 mb-4">

                                    @if ($about->about_image_1)
                                        <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                            <strong>Notice!</strong> Featured Image Uploaded
                                        </div>
                                    @endif

                                    <canvas id= "canv1" ></canvas>
                                    <p>
                                    Filename:
                                    <input name="about_image_1" type="file" multiple="false" accept="image/*" id="finput1" onchange="uploadfinput1()">
                                    </p>

                                </div>

                                <div class="col-xxl-4 col-md-4 mb-4">

                                    @if ($about->about_image_2)
                                        <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                            <strong>Notice!</strong> Featured Image Uploaded
                                        </div>
                                    @endif

                                    <canvas id= "canv2" ></canvas>
                                    <p>
                                    Filename:
                                    <input name="about_image_2" type="file" multiple="false" accept="image/*" id="finput2" onchange="uploadfinput2()">
                                    </p>

                                </div>

                                <div class="col-xxl-4 col-md-4 mb-4">

                                    @if ($about->about_image_3)
                                        <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                            <strong>Notice!</strong> Featured Image Uploaded
                                        </div>
                                    @endif

                                    <canvas id= "canv3" ></canvas>
                                    <p>
                                    Filename:
                                    <input name="about_image_3" type="file" multiple="false" accept="image/*" id="finput3" onchange="uploadfinput3()">
                                    </p>

                                </div>

                                <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
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
    <!--  START CUSTOM JS FILE  -->
    <script>
        new SimpleMDE({
            element: document.getElementById("demo1"),
            spellChecker: false,
            autosave: {
                enabled: true,
                unique_id: "demo1",
            },
        });
    </script>
    <script>
        new SimpleMDE({
            element: document.getElementById("demo2"),
            spellChecker: false,
            autosave: {
                enabled: true,
                unique_id: "demo2",
            },
        });
    </script>
    <script src="{{ asset('dashboard_assets') }}/src/assets/js/scrollspyNav.js"></script>
    <script src="{{ asset('dashboard_assets') }}/src/plugins/src/editors/markdown/simplemde.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/src/plugins/src/editors/markdown/custom-markdown.js"></script>
    <!--  END CUSTOM JS FILE  -->





    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
    <script>
        function uploadfinput1() {
        var imgcanvas1 = document.getElementById("canv1");
        var fileinput1 = document.getElementById("finput1");
        var image = new SimpleImage(fileinput1);
        image.drawTo(imgcanvas1);
        }
    </script>
    <script>
        function uploadfinput2() {
        var imgcanvas2 = document.getElementById("canv2");
        var fileinput2 = document.getElementById("finput2");
        var image = new SimpleImage(fileinput2);
        image.drawTo(imgcanvas2);
        }
    </script>
    <script>
        function uploadfinput3() {
        var imgcanvas3 = document.getElementById("canv3");
        var fileinput3 = document.getElementById("finput3");
        var image = new SimpleImage(fileinput3);
        image.drawTo(imgcanvas3);
        }
    </script>
@endsection

