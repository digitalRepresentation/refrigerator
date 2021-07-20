@extends('common.topmenu')

@section('head')
    <title>冷蔵庫管理システム</title>
@endsection

@section('content')
<form>
    <div class="panel panel-success">
        <div class="panel-heading">
        Panel content
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
            <button type="submit" class="btn btn-default">ログイン</button>
        </div>
    </div>
    
</form>
@endsection