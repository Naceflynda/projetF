@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/button.css">
    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Contact</span>
    @endcomponent
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    
                    
                        @if(!session()->has('message'))
                                    <h2>Contact Us</h2>
                                    <p class='text-muted'>contact us if you need help</p>
                                    <form action="/contact" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{$errors->first('name')}}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{$errors->first('email')}}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message"  cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="Message">{{ old('message')}}</textarea>
                                                
                                                    @error('message')
                                                        <div class="invalid-feedback">
                                                            {{$errors->first('message')}}
                                                        </div>
                                                    @enderror

                                                </div>
                                                <div class="form-group" >
                                                    <button type="submit" class="button-primary btn-block">Send a message &raquo;</button>
                                                </div>

                                        </form>   

                        @endif
                </div>
            </div>
        </div>
        <style>
            .button{
                background: rgb(39, 39, 39);
                color: white;
                border-radius: 5px;
                padding: 12px 50px;
                

            }
            .button:hover {
                color: white;
            }
            .row{
                margin-top:40px;
                margin-left: 90px;
                margin-bottom:30px;
            }
        </style>
@endsection
