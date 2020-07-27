<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">VolunteerBD</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </ul>

        <ul class="navbar-nav form-inline my-2 my-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.create')}}">Seek Donation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('donors')}}">Donors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('friends')}}">Friends @if(Auth::user()->friendReq()) ({{count(Auth::user()->friendReq())}}) @endif</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <!-- Account -->
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('userprofile.show',Auth::user()->id)}}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                        <a class="dropdown-item" href="{{route('userprofile.edit',Auth::user()->id)}}"><i class="fa fa-edit" aria-hidden="true"></i>Update Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest





        </ul>
    </div>
</nav>
