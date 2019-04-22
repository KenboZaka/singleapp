<!DOCTYPE html>
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


