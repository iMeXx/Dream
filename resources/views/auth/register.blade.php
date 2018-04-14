@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" role="form" action="{{ route('register') }}" class="login">
                {{ csrf_field() }}
                <p>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </p>
                <p class="{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name">Имя:</label>
                  <input type="text" name="name" id="name" value="{{ old('name') }}">
                </p>
                <p>
                  <label for="email">E-Mail:</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </p>
                <p>
                  <label for="password_reg">Пароль:</label>
                  <input type="password" name="password" id="password_reg" value="">
                </p>
                <p class="{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password-с">Повторите:</label>
                  <input type="password" name="password_confirmation" id="passwor-с" value="" placeholder="Пароль">
                </p>
                <p class="login-submit" style="top: 112px;">
                  <button type="submit" class="login-button">Войти</button>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
