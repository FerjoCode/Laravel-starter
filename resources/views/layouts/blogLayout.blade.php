<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        <title>Blog - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            @include('partials.nav')
            @section('featured')
            @show
        </div>
        <main class="container" role="main">
            <div class="row">
                @section('main-content')
                @show

                @include('partials.sidebar')
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>
