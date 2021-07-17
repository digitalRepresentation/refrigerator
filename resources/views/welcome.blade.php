<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>冷蔵高管理システム</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- cssReset -->
        <link rel="stylesheet" href="{{asset('css/common/reset.css')}}" />
        <!-- cssMenu -->
        <link rel="stylesheet" href="{{asset('css/common/menuTop.css')}}" />
    </head>
        <header>
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
            
        </header>
        <article></article>
        <footer></footer>
    </body>
</html>

@extends('common.topmenu')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection