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
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員一覧表示</title>
</head>
<body>
    <h1>会員一覧表示</h1>

    <table>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
            </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->telephone}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
