@extends('common.topmenu')

@section('head')
    <title>冷蔵庫管理システム</title>
@endsection

@section('style')
    <!-- cssMenu -->
    <link rel="stylesheet" href="{{asset('css/loginForm.css')}}" />
@endsection

@section('content')
    <form class="loginForm">
        <div class="panel panel-success">
            <div class="panel-heading">
            ログインページ
            </div>
            <div class="panel-title">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ID">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="パスワード">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> 入力情報を記憶します。
                    </label>
                </div>
                <button type="submit" class="btn btn-success">ログイン</button>
                <hr>
            </div>
        </div>
    </form>
    <a href=""/signup"">Sign Up</a>
@endsection