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
                <h1 class="text-center">Donors</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container size">
        <div class="row">
            <div class="col-md-12 form-container">
                @foreach($donors as $donor)
                    <div class="media">
                        <div style="height: 80px;width: 80px;border-radius: 40px;overflow: hidden;margin-right: 10px;">
                            <img src="{{asset('image/'.$donor->profile_pic())}}" style="height: 120%;width: 120%;" alt="Profile Picture">
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">{{$donor->name}}</h5>
                            <p>
                                Blood Group: {{$donor->blood_group}}
                                <br>
                                Email: {{$donor->email}}
                                <br>
                                Contact no: {{$donor->contact_no}}
                                <br>
                                City: {{$donor->city}}
                                <br>
                                Date of birth: {{$donor->date_of_birth}}
                                <br>
                                <a href="{{route('post-by-user',$donor->id)}}">Click here to see all {{count($donor->posts())}} post(s) </a>by {{$donor->name}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
