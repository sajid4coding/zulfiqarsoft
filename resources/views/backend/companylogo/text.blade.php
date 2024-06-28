@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/light/forms/switches.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/tagify/custom-tagify.css">
<link href="{{ asset('dashboard_assets') }}/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                    <li class="breadcrumb-item active" aria-current="page">Moving Text Section</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <form action="{{ route('companylogo.text.post') }}" method="POST">
            @csrf
            <div class="row mb-4 layout-spacing layout-top-spacing">
                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    @if (session('updateSuccess'))
                        <div class="alert alert-primary alert-dismissible fade show my-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('updateSuccess') }}.
                        </div>
                    @endif
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">
                            <div class="col-xxl-12 mb-4">
                                <label for="post-meta-description">Moving Text</label>
                                <input type="text" class="form-control" placeholder="Moving Text" name="movingText" value="{{ $movingText }}">
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

