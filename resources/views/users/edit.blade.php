<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集画面</title>
</head> -->
@extends('layouts.app')

@section('content')
<!-- <body>
    <h1>編集画面</h1>
    <form method="POST" action="{{ url('/user/update') }}">
    @csrf
    <input type="hidden" value="{{$users->id}}" name="id">
<div class="container">


    <div >
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
</div>
</body> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('会員情報編集') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/user/update') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('電話番号') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" class="form-control @error('tel') is-invalid @enderror" name="tel"  value="{{$users->telephone}}" required autocomplete="tel-national">

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('更新') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
