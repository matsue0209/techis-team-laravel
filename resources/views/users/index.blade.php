@extends('layouts.app')
 
@section('content')
 
<!-- タスク登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')
 
    <!-- 新タスクフォーム -->
    <form action="{{ url('user') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
 
        <!-- タスク名 -->
        <div class="form-group">
            <label for="user-name" class="col-sm-3 control-label">User</label>
 
            <div class="col-sm-6">
                <input type="text" name="name" id="user-name" class="form-control">
                <input type="text" name="name" id="user-name" class="form-control">
                <input type="text" name="name" id="user-name" class="form-control">
            </div>
        </div>
 
        <!-- タスク追加ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add User
                </button>
            </div>
        </div>
    </form>
</div>
 
<!-- タスク一覧表示 -->
@if (count($Users) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Users
    </div>
 
    <div class="panel-body">
        <table class="table table-striped User-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>User</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($Users as $User)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                        <div>{{ $User->name }}</div>
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                        <form action="{{ url('user/'.$user->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
 
                            <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>削除
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif



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

@endif
@endsection