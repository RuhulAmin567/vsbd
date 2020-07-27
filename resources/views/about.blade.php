@extends('layouts.custom')

@section('contents')
    <style>
        .size {
            padding: 80px 0px;
        }

        img {
            width: 300px;
            height: 300px;
        }

        h2 {
            color: #e74c3c;
        }

        .white {
            background-color: white;
        }

        p {
            font-size: 18px;
        }

        .right {
            float: right;
        }

        h1 {
            color: white;
        }

        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }
    </style>
    <div class="container-fluid red-background size">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">About</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container-fluid size">

        <div class="container">
            <div class="row">
                <div class="col-md-6"><img src="{{url('')}}/img/binoculars.png" alt="Our Vission" class="rounded float-left img-fluid"></div>
                <div class="col-md-6">
                    <h2 class="text-center">Our Vission</h2>
                    <hr class="red-bar">
                    <p> “Peaceful, Prosperous and Equitable society throughout Bangladesh.” </p>
                    <p> VolunteerBD is the essential professional resource and advocate for those who engage, motivate, and celebrate volunteers and their vital contributions to our society. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid white size">
        <div class="container ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <h2 class="text-center">Our Goal</h2>
                        <hr class="red-bar">
                        <p>
                        To improve basic Public health condition of community people. </p>
                        <p> Conserving, promoting and protecting environment and culture for future generation. Minimize the risk of natural disaster and provide relief and safety to vulnerable communities</p>
                    </div>
                    <div><img src="{{url('')}}/img/target.png" alt="Our Vission" class="rounded img-fluid float-right"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid size">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img src="{{url('')}}/img/goal.png" alt="Our Vission" class="rounded float-left img-fluid"></div>
                <div class="col-md-6">
                    <h2 class="text-center">Our Mission</h2>
                    <hr class="red-bar">
                    <p>
                    Empowering marginalized communities through equitable, inclusive and holistic development programmes. </p>
                    <p>
                    We provide training, advice, advocacy, resources and recognition for individuals and community organisations involved in volunteering. </p>
                </div>
            </div>
        </div>
    </div>
@endsection
