<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bang bai tap</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('assets/admin/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    ">
</head>

<body>
    <div id="wrapper">
        @include('Admin.layout.header')
        <!--/. NAV TOP  -->
        @include('Admin.layout.menu')
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>

            </div>
        @yield('noidung')
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>
