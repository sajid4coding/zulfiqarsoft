@extends('layouts.dashboardmaster')

@section('dashboard_header_css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
<!--  END CUSTOM STYLE FILE  -->

@endsection

@section('dashboard_content')
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Comments</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                @if (session('delete_comment'))
                    <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('delete_comment') }}.
                    </div>
                @endif
                <div class="widget-content widget-content-area br-8">
                    <table id="blog-list" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"></th>
                                <th>Blog Title</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Comment</th>
                                <th class="no-content text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $SL = 1;
                            @endphp
                            @foreach ($blogComments as $blogComment)
                                <tr>
                                    <td class="checkbox-column text-center">{{ $SL++ }}</td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="d-flex flex-column">
                                                <a href="{{ route('blog.details', $blogComment->relationshipwithblog->id) }}" target="_blank" class="text-truncate fw-bold">{{$blogComment->relationshipwithblog->blogTitle}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $blogComment->commentUserName }}</td>
                                    <td>
                                        {{ $blogComment->commentUserEmail }}
                                    </td>
                                    <td>
                                        <textarea disabled cols="30" rows="5">{{ $blogComment->userComment }}</textarea>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('blog.comments.delete', $blogComment->id) }}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        </a>
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
        blogList = $('#blog-list').DataTable({
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
