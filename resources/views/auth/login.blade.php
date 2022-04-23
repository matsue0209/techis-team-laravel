@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center font-weight-bold mt-5 mb-5">ログイン</h1>

                <div class="w-75 m-auto">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-6 m-auto">
                                <input id="email" type="email" class="border-dark form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('メールアドレス') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6 m-auto">
                                <input id="password" type="password" class="border-dark form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('パスワード') }}" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-3 m-auto">
                                <button type="submit" class="btn btn-light w-100 border-dark">
                                    {{ __('ログイン') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
