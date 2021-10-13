<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name')}} | @yield('page')</title>
    <!-- Bootstrap core CSS-->
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{url('/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{url('/assets/css/sb-admin.css')}}" rel="stylesheet">
    <!--Icons-->
    <link rel="icon" type="image/png" href="{{url('/assets/images/icons/favicon.png')}}"/>
</head>

<body class="bg-dark">
<div class="container">
   @yield('form')
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{url('/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{url('/assets/vendor/jquery-easing/jquery.easing.js')}}"></script>
</body>

</html>
