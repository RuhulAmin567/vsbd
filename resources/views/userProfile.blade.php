@extends('layouts.custom')

@section('contents')

    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

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

        .form-group {
            text-align: left;
        }

        h1 {
            color: white;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }
    </style>
    <div class="container-fluid red-background size">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">User Profile</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container size">
        <div class="row">
            <div class="col-md-12 form-container">

                    <div class="media">
                        <div style="height: 80px;width: 80px;border-radius: 40px;overflow: hidden;margin-right: 10px;">
                            <img src="{{asset('image/'.$user->profile_pic())}}" style="height: 120%;width: 120%;" alt="Profile Picture">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">
                                {{$user->name}}
                                @if(Auth::user()->friend($user->id))
                                    @if(Auth::user()->friend($user->id)->approved)
                                        <a href="{{route('unfriend',$user->id)}}" style="float: right">Unfriend</a>
                                    @else
                                        <a href="{{route('cancel-request',$user->id)}}" style="float: right">Cancel request</a>
                                    @endif
                                @elseif($user->id != Auth::user()->id)
                                    <a href="{{route('friend-request',$user->id)}}" style="float: right">Add friend</a>
                                @endif
                            </h5>
                            <p>
                                Blood Group: {{$user->blood_group}}
                                <br>
                                Email: {{$user->email}}
                                <br>
                                Contact no: {{$user->contact_no}}
                                <br>
                                City: {{$user->city}}
                                <br>
                                Date of birth: {{date('d M Y',strtotime($user->date_of_birth))}}
                                <br>
                                <a href="{{route('post-by-user',$user->id)}}">Click here to see all {{count($user->posts())}} post(s) </a>by {{$user->name}}
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
