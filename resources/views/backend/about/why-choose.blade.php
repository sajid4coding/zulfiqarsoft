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
                        <li class="breadcrumb-item active" aria-current="page">Why Choose Us</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <form action="{{ route('dashboard.why.choose.store') }}" method="POST" enctype="multipart/form-data">
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
                                <h3 class="my-3"> \\ Why Choose Us // </h3>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="post-title" placeholder="Team Heading Line" name="team_heading_line" value="{{ $whychooseus->team_heading_line ? $whychooseus->team_heading_line : '' }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>Description</label>
                                    <textarea id="demo1" class="form-control" name="about_team" cols="30" rows="10">{{ $whychooseus->about_team ? $whychooseus->about_team : '' }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="widget-content widget-content-area blog-create-section mt-4">

                            <h5 class="mb-4">SEO Settings</h5>

                            <div class="row mb-4">
                                <div class="col-xxl-12 mb-4">
                                    <input type="text" class="form-control" placeholder="Meta Heading Title" name="meta_team_heading_line" value="{{ $whychooseus->meta_team_heading_line ? $whychooseus->meta_team_heading_line : '' }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <label>About Meta Description</label>
                                    <textarea id="demo2" class="form-control" name="meta_about_team" cols="30" rows="10">{{ $whychooseus->meta_about_team ? $whychooseus->meta_about_team : '' }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                        <div class="widget-content widget-content-area blog-create-section">
                            <div class="row">

                                <div class="col-xxl-12 col-md-12 mb-4">
                                    @if ($whychooseus->about_main_image)
                                        <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                            <strong>Notice!</strong> Featured Image Uploaded
                                        </div>
                                    @endif
                                    <canvas id= "canv1" ></canvas>
                                    <p>
                                        Filename:
                                        <input name="about_main_image" type="file" multiple="false" accept="image/*" id="finput" onchange="upload()">
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
        function upload() {
        var imgcanvas = document.getElementById("canv1");
        var fileinput = document.getElementById("finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>
@endsection

