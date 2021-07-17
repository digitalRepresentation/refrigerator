<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- cssReset -->
        <link rel="stylesheet" href="{{asset('css/common/reset.css')}}" />
        <!-- cssMenu -->
        <link rel="stylesheet" href="{{asset('css/common/menuTop.css')}}" />
</head>
<body>
    <header>
        @section('sidebar')
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
        @show    
    </header>
</body>
</html>
