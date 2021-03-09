<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')-Our Business Site</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{asset('theme/backend/assets/images/favicon-32x32.png" type="image/png')}}" />
    <link href="{{asset('theme/backend/assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Vector CSS -->
    <link href="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{asset('theme/backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('theme/backend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('theme/backend/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/sweetalert2.min.css')}}">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/dark-sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/backend/assets/css/jquery-ui.min.css')}}" />
</head>

<body>
<!-- wrapper -->
<div class="wrapper">

    @include('backend.components.sidebar')
    @include('backend.components.header')

    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
               @yield('content')
                <!--end row-->

            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
   @include('backend.components.footer')
</div>
@csrf
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('theme/backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/bootstrap.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('theme/backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--Data Tables js-->
<script src="{{asset('theme/backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
<script src="{{asset('theme/backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/index2.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/sweetalert2.all.min.js')}}"></script>
<!-- App JS -->
<script src="{{asset('theme/backend/assets/js/app.js')}}"></script>
<script src="{{asset('theme/backend/assets/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('theme/backend/assets/js/custom.js')}}"></script>
</body>

</html>
