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
        
        <!-- bootstrap -->
        <!-- 합쳐지고 최소화된 최신 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- 부가적인 테마 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        @yield('style')
</head>
<body>
    <header>
            <div class="login">
                <a href="/login">login</a>
            </div>
            <!-- menu -->
            <div class="topnav">
                <a class="active" href="/">Home</a>
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
