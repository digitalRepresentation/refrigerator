<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ config('app.name', 'Laravel') }}
    @yield('head')
        <!-- cssReset -->
        <link rel="stylesheet" href="{{asset('css/common/reset.css')}}" />
        <!-- cssMenu -->
        <link rel="stylesheet" href="{{asset('css/common/menuTop.css')}}" />
        
        <!-- bootstrap -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        @yield('style')
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        @yield('script')
        
</head>
<body>
    <header>
            <div class="login">
                <p>ようこそ！　{{ Session::get('user') }} 様</p>
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
