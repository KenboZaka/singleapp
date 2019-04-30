<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @include('layouts.stylesheet')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top">
            <div class="container">
            <a href="#" class="navbar-brand">Single_App</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#NavbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NavbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#About" class="nav-link">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Login" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="container mb-3">
        @yield('content')
    </div>
    <footer class="footer bg-info fixed-bottom mt-3">
        <div class="py-3">
            <span class="fab fa-twitter"></span>
            <span class="fab fa-facebook"></span>
            <p class="float-right text-white mb-0 mr-3">CopyRight  </p>
        </div>
    </footer>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>posts</title>
        @include('layouts.stylesheet')
    </head>
    <body>
        <div class="container">
        @include('layouts.nav')
        @yield('content')
        </div>
    </body>
</html>
 --}}

