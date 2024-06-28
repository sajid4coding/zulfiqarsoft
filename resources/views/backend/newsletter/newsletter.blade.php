@extends('layouts.dashboardmaster')
@section('dashboard_header_css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/light/table/datatable/custom_dt_custom.css">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/table/datatable/custom_dt_custom.css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard_assets') }}/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('dashboard_assets') }}/src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('dashboard_content')
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('newsletter') }}">Newsletter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                @if (session('insert_status'))
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                        <strong>Notice!</strong> {{ session('insert_status') }}.
                    </div>
                @endif

                <div class="widget-content widget-content-area br-8 p-1">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> Record Id </th>
                                <th>Email</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $SL = 1;
                            @endphp
                            @foreach ($newsletters as $newsletter)
                                <tr>
                                    <td class="checkbox-column text-center"> {{ $SL++ }} </td>
                                    <td>
                                        <div class="d-flex justify-content-left">
                                            <div class="d-flex flex-column">
                                                <span class="text-white fw-bold">{{ $newsletter->newsletterEmail }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('newsletter.delete.pos', $newsletter->id)}}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
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

    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <script>

        function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
            var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                keyboard: false
            })
            document.querySelector(btnSelector).addEventListener('click', function() {
                var src = videoSource;
                myModal.show('show');
                var ifrm = document.createElement("iframe");
                ifrm.setAttribute("src", src);
                ifrm.setAttribute('width', iframeWidth);
                ifrm.setAttribute('height', iframeHeight);
                ifrm.style.border = "0";
                ifrm.setAttribute("allow", "encrypted-media");
                document.querySelector(iframeContainer).appendChild(ifrm);
            })
        }

        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')

    </script>
    <!--  END CUSTOM SCRIPT FILE  -->

    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
@endsection
