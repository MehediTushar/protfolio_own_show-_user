<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mehedi Hasan</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{secure_asset('css/user_style.css')}}">
</head>

<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="secure_assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="{{url('/')}}" class="nav-link <?php if($pages=='home'){echo 'active';}?> ">HOME</a>
            <a href="{{route('user.resume')}}" class="nav-link <?php if($pages=='resume'){echo 'active';}?> ">RESUME</a>
            <a href="{{route('user.protfolio')}}" class="nav-link <?php if($pages=='protfolio'){echo 'active';}?>">PORTFOLIO</a>
            <a href="{{route('user.contact')}}" class="nav-link <?php if($pages=='contact'){echo 'active';}?> ">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside>
            <div class="profile-img-wrapper">
                @if(count($infos)>0)
                @foreach ($infos as $info)
                <img src="{{url($info->image)}}" alt="profile">
            </div>
            <h1 class="profile-name">{{$mains->name}}</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">{{$info->designation}}</span>
            </div>
            <nav class="social-links">
                <a href="#!" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-behance"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-dribbble"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-github"></i></a>
            </nav>
            <div class="widget">
                <h5 class="widget-title">{{$info->title}}</h5>
                <div class="widget-content">
                    <p>BIRTHDAY : {{$info->dob}}</p>
                    <p>WEBSITE : www.example.com</p>
                    <p>PHONE : {{$info->phone}}</p>
                    <p>MAIL : {{$info->email}}</p>
                    <p>GENDER : @if ($info->gender ==1)
                        <span class="label label-success">{{'Male'}}</span>
                        @elseif ($info->gender==2)
                        <span class="label label-primary">{{'Female'}}</span>
                        @elseif ($info->gender==3)
                        <span class="label label-info">{{'Others'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif</p>
                    <p>BLOOD GROUP : @if($info->blood_group==1)
                        <span class="label label-success">{{'O+'}}</span>
                        @elseif ($info->blood_group==2)
                        <span class="label label-success">{{'O-'}}</span>
                        @elseif ($info->blood_group==3)
                        <span class="label label-success">{{'A+'}}</span>
                        @elseif ($info->blood_group==4)
                        <span class="label label-success">{{'A-'}}</span>
                        @elseif ($info->blood_group==5)
                        <span class="label label-success">{{'AB+'}}</span>
                        @elseif ($info->blood_group==6)
                        <span class="label label-success">{{'O-'}}</span>
                        @elseif ($info->blood_group==7)
                        <span class="label label-success">{{'B+'}}</span>
                        @elseif ($info->blood_group==8)
                        <span class="label label-success">{{'B-'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif</p>
                    <p>Location : {{$info->address}}</p>
                    <a class="btn btn-download-cv btn-primary rounded-pill" target="_blank" href="{{url($info->resume)}}" role="button">DOWNLOAD CV</a>
                </div>
            </div>
            @endforeach
                @endif
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">LANGUAGES</h5>
                        <p>Bangla : native</p>
                        <p>English : Average</p>
                    </div>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">INTERESTS</h5>
                        <p>Play game</p>
                        <p>Watch movie</p>
                        <p>Traveling </p>
                        <p>internet browsing</p>
                    </div>
                </div>
            </div>
        </aside>
        @yield('content')
    </div>
    <script src="{{secure_asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{secure_asset('vendors/@popperjs/core/dist/umd/popper-base.min.js')}}"></script>
    <script src="{{secure_asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{secure_asset('js/user.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
