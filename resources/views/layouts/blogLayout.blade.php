<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        <div class="container">
            @include('partials.nav')
            @include('partials.featured')
        </div>
        <main class="container" role="main">
            <div class="row">
                @include('partials.mainContent')
                @include('partials.sidebar')
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>
