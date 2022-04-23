<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集画面</title>
</head>
<body>
    <h1>編集画面</h1>
    <form method="POST" action="{{ url('/user/update') }}">
    @csrf
    <input type="hidden" value="{{$users->id}}" name="id">

    <div>
        <label for="form-name">名前</label>
        <input type="text" name="name" value="{{$users->name}}" id="form-name" required>
    </div>
    <div>
        <label for="form-tel">電話番号</label>
        <input type="tel" name="telephone" value="{{$users->telephone}}" id="form-tel">
    </div>
    <div>
        <label for="form-email">メールアドレス</label>
        <input type="email" name="email" value="{{$users->email}}" id="form-email">
    </div>
    <button type="submit">修正</button>
</form>

</body>
</html>
