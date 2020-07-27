@extends('layouts.custom')

@section('contents')
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 60px 0;

        }

        h1 {
            color: white;
        }

        .form-group {
            text-align: left;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }

        .form-container {
            background-color: white;
            border: .5px solid #eee;
            border-radius: 5px;
            padding: 20px 10px 20px 30px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        }
    </style>
    <div class="container-fluid red-background size">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">SignIn</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="conatiner size ">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <h3>SignIn</h3>
                <hr class="red-bar">

                <!-- Erorr Messages -->

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email/Phone no.</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
