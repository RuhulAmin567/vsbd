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
                <h1 class="text-center">People Need You</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container size">
        <div class="row">
            <div class="col-md-12 form-container mb-2">
                <form action="{{route('search-post')}}" method="post">
                    @csrf
                    <div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                        <div class="form-group text-center center-aligned">
                            <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                                <option value="">-- Select --</option>
                                <optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup>
                                <option value="Ghorashal">Ghorashal</option>
                                <option value="Monohardi">Monohardi</option>
                                <option value="Shibpur">Shibpur</option>
                                <option value="Raipura">Raipura</option>
                                <option value="Madhabdi">Madhabdi</option>
                                <option value="Mirzapur">Mirzapur</option>
                                <option value="Dhanbari">Dhanbari</option>
                                <option value="Madhupur">Madhupur</option>
                                <option value="Gopalpur">Gopalpur</option>
                                <option value="Ghatail">Ghatail</option>
                                <option value="Kalihati">Kalihati</option>
                                <option value="Sakhipur">Sakhipur</option>
                                <option value="Bhuapur">Bhuapur</option>
                                <option value="Elenga">Elenga</option>
                                <option value="Karatia">Karatia</option>
                                <option value="Aricha">Aricha</option>
                                <option value="Basail">Basail</option>
                                <option value="Bhairab">Bhairab</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Rajbari">Rajbari</option>

                                <optgroup title="Chittagong" label="&raquo; Chittagong"></optgroup>
                                <option value="Chhagalnaiya">Chhagalnaiya</option>
                                <option value="Daganbhuiyan">Daganbhuiyan</option>
                                <option value="Sonagazi">Sonagazi</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Khagrachhari ">Khagrachhari</option>
                                <option value="Rangamati">Rangamati</option>
                                <option value="Rangunia">Rangunia</option>
                                <option value="Sandwip">Sandwip</option>
                                <option value="Fatikchhari">Fatikchhari</option>
                                <option value="Nazir Hat">Nazir Hat</option>
                                <option value="Baroiyarhat">Baroiyarhat</option>
                                <option value="Mirsharai">Mirsharai</option>
                                <option value="Sitakunda">Sitakunda</option>
                                <option value="Hathazari ">Hathazari</option>
                                <option value="Raozan">Raozan</option>
                                <option value="Patiya">Patiya</option>
                                <option value="Chandanaish">Chandanaish</option>
                                <option value="Satkania">Satkania</option>
                                <option value="Boalkhali">Boalkhali</option>
                                <option value="Akhaura">Akhaura</option>
                                <option value="Sarail">Sarail</option>
                                <option value="Chowmuhani">Chowmuhani</option>
                                <option value="Laksam">Laksam</option>
                                <option value="Hatiya">Hatiya</option>
                                <option value="Maijdee">Maijdee</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Burichong">Burichong</option>
                                <option value="Comilla">Comilla</option>

                                <optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup>
                                <option value="Joypurhaty">Joypurhat</option>
                                <option value="Rahanpur">Rahanpur</option>
                                <option value="Kalai">Kalai</option>
                                <option value="Khetlal">Khetlal</option>
                                <option value="Akkelpur">Akkelpur</option>
                                <option value="Mundumala">Mundumala</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Natore">Natore</option>
                                <option value="Shahjadpur">Shahjadpur</option>
                                <option value="Ullapara">Ullapara</option>
                                <option value="Iswardi">Iswardi</option>
                                <option value="Santhia">Santhia</option>
                                <option value="Dhunat">Dhunat</option>
                                <option value="Tanore">Tanore</option>

                                <optgroup title="Mymensingh" label="&raquo; Mymensingh"></optgroup>
                                <option value="Shambhuganj">Shambhuganj</option>
                                <option value="Muktagachha">Muktagachha</option>
                                <option value="Bhaluka">Bhaluka</option>
                                <option value="Gouripur">Gouripur</option>
                                <option value="Phulpur">Phulpur</option>
                                <option value="Trishal">Trishal</option>
                                <option value="Nandail">Nandail</option>
                                <option value="Gaffargaon">Gaffargaon</option>
                                <option value="Ishwarganj">Ishwarganj</option>
                                <option value="Haluaghat">Haluaghat</option>
                                <option value="Fulbaria">Fulbaria</option>
                                <option value="Netrokona">Netrokona</option>
                                <option value="Sherpur">Sherpur</option>

                                <optgroup title="Narayanganj" label="&raquo; Narayanganj"></optgroup>
                                <option value="Badin">Badin</option>
                                <option value="Dadu">Dadu</option>
                                <option value="Ghotki">Ghotki</option>

                                <optgroup title="Barisal" label="&raquo; Barisal"></optgroup>
                                <option value="Bhola">Bhola</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojpur">Pirojpur</option>
                                <option value="Jhalokati">Jhalokati</option>
                                <option value="Barguna">Barguna</option>
                                <option value="Amtali">Amtali</option>
                                <option value="Bakerganj">Bakerganj</option>
                                <option value="Char Fasson">Char Fasson</option>
                                <option value="Gournadi">Gournadi</option>
                                <option value="Swarupkati">Swarupkati</option>
                                <option value="Kuakata">Kuakata</option>
                                <option value="Muladi">Muladi</option>
                                <option value="Bhandaria">Bhandaria</option>
                                <option value="Mathbaria">Mathbaria</option>
                                <option value="Lalmohan">Lalmohan</option>
                                <option value="Borhanuddin">Borhanuddin</option>
                                <option value="Daulatkhan">Daulatkhan</option>
                                <option value="Banaripara">Banaripara</option>
                                <option value="Mehendiganj">Mehendiganj</option>
                                <option value="Nalchity">Nalchity</option>
                                <option value="Patharghata">Patharghata</option>
                                <option value="Kalapara">Kalapara</option>

                                <optgroup title="Rangpur" label="&raquo; Rangpur"></optgroup>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                                <option value="Saidpur">Saidpur</option>
                                <option value="Bogra">Bogra</option>
                            </select>
                        </div>
                        <div class="form-group center-aligned">
                            <input type="text" class="form-control demo-default text-center margin10px" name="type" placeholder="Type">
                        </div>
                        <div class="form-group center-aligned">
                            <button type="submit" class="btn btn-lg btn-default" style="border: 1px solid gray;" id="search">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-container">
                @foreach($posts as $post)
                    <div class="media">
                        <div style="height: 80px;width: 80px;border-radius: 40px;overflow: hidden;margin-right: 15px;">
                            <img src="{{asset('image/'.$post->user->profile_pic())}}" style="height: 120%;width: 120%;" alt="Profile Picture">
                        </div>
                        <div class="media-body">
                            <p>
                                <a href="{{url('user/'.$post->user->id)}}">{{$post->user->name}}</a> made a post from {{$post->user->city}} at {{date('d M, Y h:i:s a',strtotime($post->created_at))}}
                                @if($post->user_id==Auth::id())
                                    <br><a href="{{route('post.edit',$post->id)}}" style="margin-top: -10px;">Edit Post</a>
                                    <a href="" onclick="
                                        if (confirm('Are You Sure To Delete This?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form{{ $post->id }}').submit();
                                        }else {
                                        event.preventDefault();
                                        }
                                        ">Delete Post</a>
                                    <form id="delete-form{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                @endif
                            </p>
                            <h6 class="mt-0">{{$post->title}}</h6>
                            <p>{{$post->type}}</p>
                            <img src="{{asset('image/'.$post->image)}}" alt="">
                            <p>{{$post->description}}</p>
                        </div>
                    </div>
                    @foreach($post->comments as $comment)
                        <div class="row">
                            <div class="col-2">
                                <a href="{{url('user/'.$comment->user->id)}}">{{$comment->user->name}}</a>
                            </div>
                            <div class="col-12">
                                {!! $comment->comment !!}
                            </div>
                        </div>
                    @endforeach
                @auth()
                    <form action="{{route('comment')}}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" class="form-control demo-default margin10px" name="comment" placeholder="Comment here...">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="submit" class="margin10px btn btn-primary" value="Comment">
                                </div>
                            </div>
                        </div>
                    </form>
                @endauth
                @endforeach
            </div>
        </div>
    </div>
@endsection
