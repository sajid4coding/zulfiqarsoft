@extends('layouts.dashboardmaster')
@section('dashboard_content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Settings</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">List</li> --}}
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <form action="{{ route('general.setting.post') }}" method="POST">
            @csrf
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    @if (session('update_status'))
                        <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                            <strong>Notice!</strong> {{ session('update_status') }}.
                        </div>
                    @endif
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Agency Video</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row mb-12">
                                <div class="col">
                                    <input name="agency_video" type="url" class="form-control" placeholder="Agency Video Link" value="{{ $general_setting->agency_video ? $general_setting->agency_video : '' }}">
                                    <small class="text-danger">put here on your yourtube or vimeo video link</small>
                                    @error('agency_video')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Website Title</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row mb-12">
                                <div class="col">
                                    <input name="website_title" type="text" class="form-control" placeholder="Website Title" value="{{ $general_setting->website_title ? $general_setting->website_title : '' }}">
                                    @error('website_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>NewsLetter Text</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row mb-12">
                                <div class="col">
                                    <input name="newsletter_text" type="text" class="form-control" placeholder="NewsLetter Text" value="{{ $general_setting->newsletter_text ? $general_setting->newsletter_text : '' }}">
                                    @error('newsletter_text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Copyright Text</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                                <div class="col">
                                    <input name="copyright_text" type="text" class="form-control" placeholder="Copyright Text" value="{{ $general_setting->copyright_text ? $general_setting->copyright_text : '' }}">
                                    @error('copyright_text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-outline-primary mb-4" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
