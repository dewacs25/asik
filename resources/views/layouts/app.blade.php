<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard | Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://fileshaudy.000webhostapp.com/files/logokotabogor.gif">
    <!-- Custom CSS -->
    <!-- Custom CSS -->
    <link href="{{ asset('TemplateAdmin') }}/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('TemplateAdmin') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('TemplateAdmin') }}/assets/extra-libs/multicheck/multicheck.css">
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/jquery/dist/jquery.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style>
        /* CSS untuk tampilan overlay loading */
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.87);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            color: #fff;
            font-size: 24px;
        }

        #loading-text {
            font-size: 24px;
            animation: blink-animation 1s infinite;
        }

        @keyframes blink-animation {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="loading-overlay">
        <span id="loading-text">
            <img src="https://fileshaudy.000webhostapp.com/files/logokotabogor.gif" width="25px" alt=""> ASIK
            KOTA BOGOR
        </span>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    @yield('breadcrumb')
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('TemplateAdmin') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('TemplateAdmin') }}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('TemplateAdmin') }}/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('TemplateAdmin') }}/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/excanvas.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/jquery.flot.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/dist/js/pages/chart/chart-page-init.js"></script>

    <script src="{{ asset('TemplateAdmin') }}/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{ asset('TemplateAdmin') }}/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#dataTable').DataTable();
    </script>

    <script>
        // Fungsi untuk menampilkan overlay loading saat halaman dimuat ulang
        function showLoadingOverlay() {
            var loadingOverlay = document.getElementById('loading-overlay');
            loadingOverlay.style.display = 'flex';
        }

        // Fungsi untuk menyembunyikan overlay loading setelah halaman selesai dimuat
        function hideLoadingOverlay() {
            var loadingOverlay = document.getElementById('loading-overlay');
            loadingOverlay.style.display = 'none';
        }

        // Event listener untuk menampilkan overlay loading sebelum halaman dimuat ulang
        window.addEventListener('beforeunload', showLoadingOverlay);
        // Event listener untuk menyembunyikan overlay loading setelah halaman selesai dimuat
        window.addEventListener('load', hideLoadingOverlay);
    </script>
</body>

</html>
