<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('\node_modules\bootstrap\dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('\css\main.css') }}">
    <link rel="stylesheet" href="{{ url('\node_modules\@fortawesome\fontawesome-free\css\all.min.css') }}">
    @yield('stylesheets')
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
 
    <!-- Scripts -->
    @yield('header_scripts')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <h1 class="site-name"><a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{ Auth::user()->nama }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('profile') }}">Profil</a>
                        <a class="dropdown-item" href="{{ url('courses') }}">Kursusku</a>
                        <div class="dropdown-divider"></div>
                        <form class="logout_button" action="logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="\node_modules\jquery\dist\jquery.min.js"></script>
    <script src="\node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="\js\master.js"></script>
    @yield('footer_scripts')
</body>
</html>