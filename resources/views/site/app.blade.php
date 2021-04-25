<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>APP-UDV</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url(mix('site/css/style.css'))}}">
    <link rel="stylesheet" href="{{ url(mix('site/bootstrap.css'))}}">
    <script src="{{url(mix('site/js/script.js'))}}"></script>
    <script src="{{url(mix('site/jquery.js'))}}"></script>
    <script src="{{url(mix('site/bootstrap.js'))}}"></script>

</head>
<body>

     @include('site.header')

    <section class="menu">

    </section>
    <section class="content">
        @yield('conteudo')

    </section>

    <script src="jquery-3.0.0.min.js"></script>
    <script src="site.js"></script>
</body>
</html>
