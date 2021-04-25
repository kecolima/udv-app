<html>
    <head>
        @include('site.head')
    </head>
    <header>
        @include('site.header')
    </header>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <div class="">

        </div>
        <div class="">

        </div>
    </body>
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        @include('site.footer')
    </footer>
</html>

