<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
        <!-- cssReset -->
        <link rel="stylesheet" href="{{asset('css/common/reset.css')}}" />
        <!-- cssMenu -->
        <link rel="stylesheet" href="{{asset('css/common/menuTop.css')}}" />
        @yield('style')
</head>
<body>
    <header>
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
            @yield('header')
    </header>
    <article>
        @yield('content')
    </article>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
