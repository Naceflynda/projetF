@extends('layouts.default')

@section('title', 'Sign Up for an Account')

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
                <h2>Create Account</h2>
                <div class="spacer"></div>

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input id="first_name" type="text" placeholder="Fist Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    <input id="username" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                   
                    <input id="email" type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                   
                    <input id="password-confirm" type="password" placeholder="Confirm Password "   class="form-control"name="password_confirmation" required autocomplete="new-password">

                    <div class="login-container">
                        <button type="submit" class="auth-button">Create Account</button>
                        <div class="already-have-container">
                            <p><strong>Already have an account?</strong></p>
                            <strong><a href="{{ route('login') }}">Login</a></strong>
                        </div>
                    </div>

                </form>
            </div>

            <div class="auth-right">
                <h2>New Customer</h2>
                <div class="spacer"></div>
                <p><strong>Save time now.</strong></p>
                <p>Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences.</p>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>Loyalty Program</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</p>
            </div>
        </div> <!-- end auth-pages -->
    </div>
@endsection
