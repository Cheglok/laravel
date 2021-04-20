<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Панель Администратора</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <!-- TABLE STYLES-->
    <link href="{{asset('assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet"/>


</head>
<body>
<div id="wrapper">
    <x-admin-topbar></x-admin-topbar>

    <x-admin-sidebar></x-admin-sidebar>


    <div id="page-wrapper">
        <div id="page-inner">
            @yield('content')
        </div>
        <x-admin-footer></x-admin-footer>
    </div>
</div>


<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Metis Menu Js -->
<script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="{{asset('assets/js/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- Custom Js -->
<script src="{{asset('assets/js/custom-scripts.js')}}"></script>

</body>
</html>
