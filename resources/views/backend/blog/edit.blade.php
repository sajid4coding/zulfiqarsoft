@extends('layouts.dashboardmaster')
@section('dashboard_header_css')

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/forms/switches.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/tagify/custom-tagify.css">
<link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/light/apps/blog-create.css">
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/apps/blog-create.css">
<!--  END CUSTOM STYLE FILE  -->

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
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row mb-4 layout-spacing layout-top-spacing">
                @csrf
                @method('PUT')
                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    @if (session('updateStatus'))
                        <div class="alert alert-primary alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('updateStatus') }}.
                        </div>
                    @endif
                    
                    <div class="widget-content widget-content-area blog-create-section">

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <label for="tags">Blog Title</label>
                                <input name="blogTitle" type="text" class="form-control" id="post-title" placeholder="blog title" value="{{ $blog->blogTitle }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <label>Description</label>
                                {{-- <div id="blog-description"></div> --}}
                                <textarea id="summernote" class="form-control" name="blogDescription" cols="30" rows="10" placeholder="Portfolio Description">{{ $blog->blogDescription }}</textarea>
                            </div>
                        </div>

                    </div>

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h5 class="mb-4">SEO Settings</h5>

                        <div class="row mb-4">
                            <div class="col-xxl-12 mb-4">
                                <label for="tags">Blog Meta Title</label>
                                <input name="blogMetaTitle" type="text" class="form-control" id="post-meta-title" placeholder="blog meta title" value="{{ $blog->blogMetaTitle }}">
                            </div>
                            <div class="col-xxl-12">
                                <label for="post-meta-description">Meta Description</label>
                                <textarea name="blogMetaDescription" class="form-control" id="post-meta-description" cols="10" rows="5" placeholder="blog meta description">{{ $blog->blogMetaDescription }}</textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="blogStatus" class="switch-input" type="checkbox" role="switch" id="showPublicly" {{ $blog->blogStatus=='on'?'checked':'' }}>
                                    <label class="switch-label" for="showPublicly">Publish</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="blogComment" class="switch-input" type="checkbox" role="switch" id="enableComment" {{ $blog->blogComment=='on'?'checked':'' }}>
                                    <label class="switch-label" for="enableComment">Enable Comments</label>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="tags">Tags</label>
                                <input class="form-control" name="blogTag" id="tags" class="blog-tags">
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="category">Service Category</label>
                                <select class="form-control" name="serviceCategory" id="category">
                                    <option value="{{ $blog->relationshipwithServiceCategory->id }}">Selected: {{ $blog->relationshipwithServiceCategory->service_category_title }}</option>
                                    @foreach ($serviceCategories as $serviceCategory)
                                        <option value="{{ $serviceCategory->id }}">{{ $serviceCategory->service_category_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">

                                @if ($blog->blogThumbnail)
                                    <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                        <strong>Notice!</strong> Portfolio Thumbnail Uploaded.
                                    </div>
                                @endif

                                <label for="product-images">Blog Thumbnail</label>
                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <canvas id="blogThumbnail"></canvas>
                                    <p>
                                    Filename:
                                    <input name="blogThumbnail" type="file" multiple="false" accept="image/*" id="blogThumbnail_finput" onchange="upload()">
                                    </p>
                                </div>

                            </div>

                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button type="submit" class="btn btn-success w-100">Edit Blog</button>
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
        var imgcanvas = document.getElementById("blogThumbnail");
        var fileinput = document.getElementById("blogThumbnail_finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>
@endsection
