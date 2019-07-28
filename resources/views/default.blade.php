<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Template</title>
</head>

<body class="w3-theme-light">

<nav id="nav" class="w3-top w3-theme-dark">
    <div class="w3-bar">
        <a href="/" class="w3-bar-item w3-button navItem @yield('home')"><i class="fab fa-home"></i>&nbsp;Home</a>
        <a href="/page1" class="w3-bar-item w3-button navItem @yield('page1')">Page1</a>
        <a href="#" class="w3-bar-item w3-button navItem">Page2</a>
        <a href="#" class="w3-bar-item w3-button navItem">Page3</a>
    </div>
</nav>

<div id="swup" class="w3-content transition-fade w3-padding-64">

    @yield('content')

</div>

<footer class="w3-theme w3-center w3-container w3-padding-large">
    <i class="fab fa-2x w3-hover-opacity fa-facebook"></i>
    <i class="fab fa-2x w3-hover-opacity fa-instagram"></i>
    <i class="fab fa-2x  w3-hover-opacity fa-snapchat"></i>
    <i class="fab fa-2x  w3-hover-opacity fa-pinterest"></i>
    <i class="fab fa-2x  w3-hover-opacity fa-twitter"></i>
    <i class="fab fa-2x  w3-hover-opacity fa-linkedin"></i>
</footer>

</body>

<script src="{{ mix('js/app.js') }}"></script>

</html>
