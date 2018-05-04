@extends('layouts.master')

@section('content')
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <h4 class="mtext-105 cl2 txt-center p-b-30">
            Login
        </h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="block">
                <div class="bor8 m-b-20 how-pos4-parent">
                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="bor8 m-b-20 how-pos4-parent">
                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password here" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="login" value="Login" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer submit-button">Login
                </button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                
            </div>
        </form>
    </div>
</section>
@endsection
