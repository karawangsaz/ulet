<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="\node_modules\bootstrap\dist\css\bootstrap.min.css">
    @yield('stylesheets')
    @yield('header_scripts')
</head>
<body>
    @yield('content')

    <script src="\node_modules\jquery\dist\jquery.min.js"></script>
    <script src="\node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    @yield('footer_scripts')
</body>
</html>