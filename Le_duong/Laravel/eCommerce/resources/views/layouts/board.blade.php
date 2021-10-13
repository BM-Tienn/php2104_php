<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name')}} | Dashboard</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('/assets/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <!-- Bootstrap core CSS-->
    <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom fonts for this template-->
    <link href="{{url('/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <!-- Page level plugin CSS-->
    <link href="{{url('/assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <!-- Custom styles for this template-->
    <link href="{{url('/assets/css/sb-admin.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<x-nav-board/>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        @yield('breadcrumbs')

        @yield('cards')
        <!-- Icon Cards-->

        <!--Content-->
       @yield('content')
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <x-logout-modal-board/>

    {{--Confirm Delete Modal--}}
    <x-modal-delete-confirm/>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('/assets/js/sb-admin.min.js')}}"></script>
    {{--Handle modal --}}
    <script src="{{url('/assets/js/handle_modal.js')}}"></script>
</div>
</body>

</html>
