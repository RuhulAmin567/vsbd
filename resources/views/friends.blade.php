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
                <h1 class="text-center">Friends</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container size">
        <div class="row">
            <div class="col-md-12 form-container">
                <h1 style="color: #000000;">New Friend Request ({{count(Auth::user()->friendReq())}})</h1>
                @foreach($requests as $req)
                <div class="media">
                    <div style="height: 80px;width: 80px;border-radius: 40px;overflow: hidden;margin-right: 10px;">
                        <img src="{{asset('image/'.$req->user->profile_pic())}}" style="height: 120%;width: 120%;" alt="Profile Picture">
                    </div>

                    <div class="media-body">
                        <h5 class="mt-0">
                            {{$req->user->name}}
                            <a href="{{url('delete-request/'.$req->user_id.'/'.$req->friend_id)}}" style="float: right;margin-left: 20px;">Delete</a>
                            <a href="{{route('confirm-request',$req->user->id)}}" style="float: right">Confirm</a>
                        </h5>
                        <p>
                            Blood Group: {{$req->user->blood_group}}
                            <br>
                            Email: {{$req->user->email}}
                            <br>
                            Contact no: {{$req->user->contact_no}}
                            <br>
                            City: {{$req->user->city}}
                            <br>
                            Date of birth: {{date('d M Y',strtotime($req->user->date_of_birth))}}
                            <br>
                            <a href="{{route('post-by-user',$req->user->id)}}">Click here to see all {{count($req->user->posts())}} post(s) </a>by {{$req->user->name}}
                        </p>
                    </div>

                </div>
                @endforeach
                <h1 style="color: #000000;">My Friends ({{count(Auth::user()->friends())}})</h1>
                @foreach($friends as $friend)
                    <div class="media">
                        <div style="height: 80px;width: 80px;border-radius: 40px;overflow: hidden;margin-right: 10px;">
                            <img src="{{asset('image/'.$friend->user->profile_pic())}}" style="height: 120%;width: 120%;" alt="Profile Picture">
                        </div>

                        <div class="media-body">
                            <h5 class="mt-0">
                                {{$friend->user->name}}
                                <a href="{{route('do-unfriend',$friend->id)}}" style="float: right">Unfriend</a>
                            </h5>
                            <p>
                                Blood Group: {{$friend->user->blood_group}}
                                <br>
                                Email: {{$friend->user->email}}
                                <br>
                                Contact no: {{$friend->user->contact_no}}
                                <br>
                                City: {{$friend->user->city}}
                                <br>
                                Date of birth: {{date('d M Y',strtotime($friend->user->date_of_birth))}}
                                <br>
                                <a href="{{route('post-by-user',$friend->user->id)}}">Click here to see all {{count($friend->user->posts())}} post(s) </a>by {{$friend->user->name}}
                            </p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
