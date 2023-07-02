@extends('layouts.dashboardmaster')
@section('dashboard_content')

    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Fun Fact</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-spacing ">

                <!-- Content -->
                <form action="{{ route('funfact.post') }}" method="POST" class="section social">
                @csrf
                    <div class="row layout-top-spacing">
                        <div class="col-lg-12 col-12 layout-spacing">

                            @if (session('success'))
                                <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                                    <strong>Notice!</strong> {{ session('success') }}.
                                </div>
                            @endif

                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Heading Title & Description</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row mb-4">
                                        <div class="col-12 my-2">
                                            <input name="heading_title" type="text" class="form-control" placeholder="Heading Title" value="{{ $funfact->heading_title ? $funfact->heading_title : '' }}">
                                            @error('heading_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 my-2">
                                            <textarea class="form-control" name="heading_description" cols="30" rows="10" placeholder="Heading Description">{{ $funfact->heading_description ? $funfact->heading_description : '' }}</textarea>
                                            @error('heading_description')
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
                                            <h4>Counter</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="info">
                                            <div class="row">

                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <input readonly type="text" class="form-control" value="Global Happy Clients">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <div class="input-group social-tweet">
                                                            <input name="happy_client" type="number" class="form-control" placeholder="Type Number Of Global Happy Clients" value="{{ $funfact->happy_client ? $funfact->happy_client : '' }}">
                                                        </div>
                                                        @error('happy_client')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <input readonly type="text" class="form-control" value="Project Completed">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <div class="input-group social-tweet">
                                                            <input name="completed_project" type="number" class="form-control" placeholder="Type Number Of Project Completed" value="{{ $funfact->completed_project ? $funfact->completed_project : '' }}">
                                                        </div>
                                                        @error('completed_project')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <input readonly type="text" class="form-control" value="Team Members">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <div class="input-group social-tweet">
                                                            <input name="team_member" type="number" class="form-control" placeholder="Type Number Of Team Members" value="{{ $funfact->team_member ? $funfact->team_member : '' }}">
                                                        </div>
                                                        @error('team_member')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <input readonly type="text" class="form-control" value="Our Services">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group social-tweet">
                                                            <input name="our_services" type="number" class="form-control" placeholder="Type Number Of Our Services" value="{{ $funfact->our_services ? $funfact->our_services : '' }}">
                                                        </div>
                                                        @error('our_services')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-1">
                                                <div class="form-group text-end">
                                                    <button type="submit" class="btn btn-secondary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection

