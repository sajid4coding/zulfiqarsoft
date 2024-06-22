@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
<!--  END CUSTOM STYLE FILE  -->

<style>
    #service-list img {
        border-radius: 18px;
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
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                @if (session('create_service'))
                    <div class="alert alert-primary alert-dismissible fade show my-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('create_service') }}.
                    </div>
                @endif
                @if (session('delete_status'))
                    <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('delete_status') }}.
                    </div>
                @endif

                <div class="widget-content widget-content-area br-8">
                    <table id="service-list" class="table dt-table-hover" style="width:100%">
                        @if ($serviceCount < $serviceCategoriesCount)
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('service.create') }}" class="btn btn-success text-center my-3">Create Service</a>
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"></th>
                                <th>Service Title</th>
                                <th>Status</th>
                                <th class="no-content text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $SL = 1;
                            @endphp
                            @foreach ($services as $service)
                                <tr>
                                    <td class="checkbox-column text-center">{{ $SL++ }}</td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="d-flex flex-column">
                                                <a href="{{ route('service.edit', $service->id) }}" class="text-truncate fw-bold">{!!$service->serviceDescription!!}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($service->created_at->diffInDays(\Carbon\Carbon::now()) < 1)
                                            <span class="badge badge-primary">Recently Updated</span>
                                        @endif
                                        @if ($service->created_at->diffInDays(\Carbon\Carbon::now()) > 1 && $service->service == 'on')
                                            <span class="badge badge-success">Published</span>
                                        @endif
                                        @if ($service->serviceDescription == NULL)
                                            <span class="badge badge-danger">Draft</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="layout-px-spacing">

                        <div class="middle-content container-xxl p-0">

                            <div class="faq">

                                <div class="faq-layouting layout-spacing">

                                    <div class="fq-tab-section">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <h2>Frequently Asked <span>Questions</span></h2>

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="accordion" id="simple_faq">
                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingOne">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                                                        <span class="faq-q-title">Getting started</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingTwo">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo" aria-expanded="true" aria-controls="fqcollapseTwo">
                                                                        <span class="faq-q-title">How can I unzip product files</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseTwo" class="collapse show" aria-labelledby="fqheadingTwo" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingThree">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree" aria-expanded="false" aria-controls="fqcollapseThree">
                                                                        <span class="faq-q-title">Sidebar not rendering CSS</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseThree" class="collapse" aria-labelledby="fqheadingThree" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingFour">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour" aria-expanded="false" aria-controls="fqcollapseFour">
                                                                        <span class="faq-q-title">Production Level Built</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseFour" class="collapse" aria-labelledby="fqheadingFour" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingFive">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive" aria-expanded="false" aria-controls="fqcollapseFive">
                                                                        <span class="faq-q-title">Compilation Issue</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseFive" class="collapse" aria-labelledby="fqheadingFive" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingSix">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix" aria-expanded="false" aria-controls="fqcollapseSix">
                                                                        <span class="faq-q-title">Getting started with starter kits</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseSix" class="collapse" aria-labelledby="fqheadingSix" data-bs-parent="#simple_faq">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">

                                                        <div class="accordion" id="simple_faq1">
                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingOne1">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne1" aria-expanded="false" aria-controls="fqcollapseOne1">
                                                                        <span class="faq-q-title">Are images are provided in the download version?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseOne1" class="collapse" aria-labelledby="fqheadingOne1" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingTwo2">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo2" aria-expanded="false" aria-controls="fqcollapseTwo2">
                                                                        <span class="faq-q-title">How can I customize APPS sections?</span> <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseTwo2" class="collapse" aria-labelledby="fqheadingTwo2" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingThree3">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseThree3" aria-expanded="false" aria-controls="fqcollapseThree3">
                                                                        <span class="faq-q-title">Getting started with multiple layouts</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseThree3" class="collapse" aria-labelledby="fqheadingThree3" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingFour4">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFour4" aria-expanded="false" aria-controls="fqcollapseFour4">
                                                                        <span class="faq-q-title">How to use task managers?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseFour4" class="collapse" aria-labelledby="fqheadingFour4" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingFive5">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseFive5" aria-expanded="false" aria-controls="fqcollapseFive5">
                                                                        <span class="faq-q-title">How to setup a vpn?</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseFive5" class="collapse" aria-labelledby="fqheadingFive5" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="fqheadingSix6">
                                                                    <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseSix6" aria-expanded="true" aria-controls="fqcollapseSix6">
                                                                        <span class="faq-q-title">Chrome vs Edge which is better!</span><div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                                    </div>
                                                                </div>
                                                                <div id="fqcollapseSix6" class="collapse show" aria-labelledby="fqheadingSix6" data-bs-parent="#simple_faq1">
                                                                    <div class="card-body">
                                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
@section('dashboard_footer_script')

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('dashboard_assets') }}/src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        blogList = $('#service-list').DataTable({
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML=`
                <div class="form-check form-check-primary d-block new-control">
                    <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                </div>`
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return `
                    <div class="form-check form-check-primary d-block new-control">
                        <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                    </div>`
                }
            }],
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        });
        multiCheck(blogList);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
