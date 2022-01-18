@extends('layouts.user_layouts')
@section('content')
<?php $pages='resume';?>
<main>
    <section class="resume-section">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">EDUCATION</h2>
                <ul class="time-line">
                    @if(count($eductions)>0)
                    @foreach ($eductions as $educat )

                    <li class="time-line-item">
                        <span class="badge badge-primary">{{\Carbon\Carbon::parse($educat->strat_date)->format('Y') }}-{{ Carbon\Carbon::parse($educat->end_date)->format('Y') }}</span>
                        <h5 class="time-line-item-title">{{$educat->institute_name}}-{{$educat->district}}</h5>
                        <h6 class="time-line-item-subtitle">{{$educat->institute_dep}}</h6>
                        <p class="time-line-item-content">Passing Year: {{\Carbon\Carbon::parse($educat->paasing_year)->format('Y')}}</p>
                        <p class="time-line-item-content">GPA/CGPA: {{$educat->gpa}}</p>
                    </li>

                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">Experience</h2>
                <ul class="time-line">
                    @if(count($expers)>0)
                    @foreach ($expers as $exp )
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{\Carbon\Carbon::parse($exp->strat_date)->format('Y')  }} - Current{{\Carbon\Carbon::parse($exp->end_date)->format('Y')}}</span>
                        <h6 class="time-line-item-title"><strong>{{$exp->designate}}</strong></h6>
                        <p class="time-line-item-subtitle"><strong>{{$exp->company_name}}</strong></p>
                        <p class="time-line-item-content"><strong>Project Name:{{$exp->project_title}}</strong></p>
                        <p class="time-line-item-content"><strong>Project Description:{{$exp->project_desc}}</strong></p>
                        <p class="time-line-item-content"><strong>Experience:{{$exp->experience}}</strong></p>
                        <p class="time-line-item-content"><strong>Client:{{$exp->client}}</strong></p>
                    </li>

                    @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </section>
    <section class="services-section">
        <h6 class="section-subtitle">WHAT I DO</h6>
        <h2 class="section-title">SERVICES</h2>
        <div class="row">
            @if(count($services)>0)
            @foreach ($services as $service)

            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img class="img-fluid img-brand d-block mx-auto" src="{{url($service->img)}}" alt="target">
                </div>
                <div class="media-body">
                    <h5 class="service-title">{{$service->title}}</h5>
                    <p class="service-description">{{$service->description}}</p>
                </div>
            </div>

            @endforeach
            @endif


        </div>
    </section>
    <section class="testimonial-section">
        @if(count($testsmoni)>0)
        @foreach ($testsmoni as $tests)
        <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="testimonial-content">{{$tests->title}}</p>
                    <img src="{{(@$teste->big_img)?url():asset("assets/images/pro.jpg")}}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">{{$tests->name}}</p>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="{{$tests->id}}" class="active"></li>

            </ol>
        </div>

        @endforeach
        @endif

    </section>

    <footer>Live Resume @ <a href="#" target="_blank" rel="noopener noreferrer">Own</a>. All Rights Reserved 2020</footer>
</main>
@endsection
