<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{URL::secure('src/css/main.css')}}" />
        @yield('styles')
    </head>
    <body>
        @include('includes.header')
        <div class="main">
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>