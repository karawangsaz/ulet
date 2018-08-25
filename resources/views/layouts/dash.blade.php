<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/dash.css') }}">
    <link rel="stylesheet" href="{{ url('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('css/vendor.bundle.addons.css') }}">
    @yield('stylesheets')
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('css/star-admin-style.css') }}">
    <!-- endinject -->

    {{--
    <link rel="shortcut icon" href="images/favicon.png" /> --}}

</head>

<body>
    @yield('content')

    <!-- plugins:js -->
    <script src="{{ url('js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('js/off-canvas.js') }}"></script>
    <script src="{{ url('js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
