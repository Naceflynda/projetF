@extends('layouts.default')

@section('title', 'Login')

@section('content')
<link rel="stylesheet" href="css/auth.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif 
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>Returning Customer</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <input id="login"  type="text" placeholder="Email or Username" class="form-control {{$errors->has('login') || $errors->has('email') || $errors->has('username') ? 'is-invalid' : ''}}"  name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                              
                        
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                
                <div class="login-container">
                    <button type="submit" class="auth-button"> {{ __('Login') }}</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="spacer"></div>

                @if (Route::has('password.request'))
                    <a class="butt" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
        </div>

        <div class="auth-right">
            <h2>New Customer</h2>
            <p><strong>Save time now.</strong></p>
            <p>You don't need an account to checkout.</p>
            <div class="spacer"></div>
            <a href="" class="auth-button-hollow">Continue as Guest</a>
            <div class="spacer"> </div>
            &nbsp;
            <div class="spacer"></div>
            <p><strong>Save time later.</strong></p>
            <p>Create an account for fast checkout and easy access to order history.</p>
           
            <a href="{{ route('register') }}" class="auth-button-hollow">Create  Account  </a>

        </div>
    </div>
</div>
@endsection
