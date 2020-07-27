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
    <div class="container size">
        <div class="row">
            <div class="col-md-8 offset-md-2 form-container">
                <h3>Your Profile</h3>
                <hr class="red-bar">
                <a href="{{route('userprofile.edit', $row->id)}}" class="btn btn-primary" style="margin-top: 15px;margin-bottom: 15px;">Update</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Address</th>
                        <th>{{$row->address}}</th>
                    </tr>

                    <tr>
                        <th>Upazila</th>
                        <th>{{$row->upazila}}</th>
                    </tr>

                    <tr>
                        <th>District</th>
                        <th>{{$row->district}}</th>
                    </tr>

                    <tr>
                        <th>Profile Pic</th>
                        <th><img src="{{asset('image/'.$row->image)}}" style="height: 150px;width: auto;" alt=""></th>
                    </tr>
                    </thead>
                </table>
            </div>
{{--            <div class="col-md-12">--}}

{{--                <h1>Here is your Show View</h1>--}}

{{--                <a class="btn btn-danger" title="delete" href="" onclick="if (confirm('Are You Sure To Delete This?')){event.preventDefault();document.getElementById('delete-form{{ $row->id }}').submit();} else {event.preventDefault();}">Delete</a>--}}
{{--                <form id="delete-form{{ $row->id }}" method="post" action="{{ route('userprofile.destroy',$row->id) }}" style="display: none;">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    {{ method_field('DELETE') }}--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>

    </div>
@endsection
