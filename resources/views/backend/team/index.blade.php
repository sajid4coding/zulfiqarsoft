@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/custom_dt_custom.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/custom_dt_custom.css">
@endsection

@section('dashboard_content')
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                @if (session('create_team'))
                    <div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('create_team') }}.
                    </div>
                @endif
                @if (session('delete_status'))
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('delete_status') }}.
                    </div>
                @endif

                <div class="widget-content widget-content-area br-8">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('team.create') }}" class="btn btn-success text-center my-3">Create Team</a>
                        </div>
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> Record Id </th>
                                <th class="text-center">Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $SL = 1;
                            @endphp
                            @foreach ($members as $member)
                                <tr>
                                    <td class="checkbox-column text-center"> {{ $SL++ }} </td>
                                    <td class="text-center">
                                        {{-- @if ($member->member_image)
                                            <span><img src="{{ asset('storage/member_images/') }}/{{ $member->member_image }}" class="profile-img" alt="avatar"></span>
                                        @else
                                            <span><img src="{{ Avatar::create($member->name)->toBase64() }}" class="profile-img" alt="avatar" /></span>
                                        @endif --}}
                                        @php
                                            $filePath = 'member_images/' . $member->member_image;
                                            $folderExists = Illuminate\Support\Facades\Storage::disk('public')->exists($filePath);
                                        @endphp
                                        @if ($member->member_image && $folderExists)
                                            <span><img class="profile-img" src="{{ asset('storage/member_images/'.$member->member_image) }}" alt="{{ $member->member_image }}"></span>
                                        @else
                                            <span><img class="profile-img" src="{{ asset('preImage/member_images/'.$member->member_image) }}" alt="{{ $member->member_image }}"></span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="d-flex flex-column">
                                                <a href="{{ route('team.edit', $member->id) }}" class="text-truncate fw-bold">{{ $member->name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $member->created_at->format('M d Y') }}</td>
                                    <td>
                                        @if ($member->created_at->diffInDays(\Carbon\Carbon::now()) < 1 && $member->member_status == 'visible')
                                            <span class="badge badge-primary">Recently Updated</span>
                                        @endif
                                        @if ($member->created_at->diffInDays(\Carbon\Carbon::now()) > 1 && $member->member_status == 'visible')
                                            <span class="badge badge-success">Published</span>
                                        @endif
                                        @if ($member->member_status == 'deactive')
                                            <span class="badge badge-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('team.edit', $member->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('team.destroy', $member->id) }}" method="POST">
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

        c3 = $('#style-3').DataTable({
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
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        multiCheck(c3);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection

