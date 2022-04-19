<!--- bootstrap流テーブルレイアウト

<table class="table" table-striped table-hover>
  <thead>
    <tr>
      <th>#</th>
      <th scope="col">見出し</th>
      <th scope="col">見出し</th>
      <th scope="col">見出し</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>テーブルのセル</td>
      <td>テーブルのセル</td>
      <td>テーブルのセル</td>
    </tr>
    ...
  </tbody>
</table>



--->

<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html lang="ja">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員一覧表示</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>　
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
    <h1 class="center-block">会員一覧表示</h1>

    <table class="table table-bordered table-hover">
    
    <a href="{{route('create,$user_id')}}">新規登録先はこちら</a>
    <!---
    <a class="float-right" href="text.php">修正先はこちら</a>
    --->

      <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">電話番号</th>
                <th scope="col">メールアドレス</th>
            </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->telephone}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <!-- TODO: 削除ボタン -->
                    <form action="{{ url('user/'.$user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>編集
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

      </tbody>
    </table>

   
</body>
</html>
