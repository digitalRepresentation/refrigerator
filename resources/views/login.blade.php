@extends('common.topmenu')

@section('style')
    <!-- cssMenu -->
    <link rel="stylesheet" href="{{asset('css/loginForm.css')}}" />
@endsection

@section('content')
    <form class="loginForm" method="POST" action="{{ route('login.custom') }}">
    @csrf
    {{ __('Login') }}
        <div class="panel panel-success">
            <div class="panel-heading">
            ログインページ
            </div>
            <div class="panel-title">
                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="ID" required autocomplete="off" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="パスワード">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }} </strong>
                    </span>
                    @enderror
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
    <a href="/signup">Sign Up</a>
@endsection