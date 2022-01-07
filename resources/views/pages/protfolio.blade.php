@extends('layouts.user_layouts')
@section('content')
<?php $pages='protfolio';?>
<main>
    <section class="portfolio-section">
        <h2 class="section-title">PORTFOLIO</h2>
        <div class="card-deck">
            @if(count($protfolios)>0)
            @foreach ($protfolios as $protfolio)
            <div class="card ">
              <img class="card-img-top" src="{{url($protfolio->big_img)}}" alt="Card image cap" class="rounded mx-auto d-block" >
              <div class="card-body">
                <h6 class="card-title">{{$protfolio->title}}</h6>
                <p class="card-text text-16px"><small>{{$protfolio->description}}</small></p>
                <p class="card-text"><small><a class="btn btn-outline-info btn-md" href="{{url($protfolio->pro_link)}}" target="_blank">use me</a></small></p>
              </div>
            </div>
            @endforeach
             @endif
          </div>



    </section>

    <footer>Live Resume @ <a href="#" target="_blank" rel="noopener noreferrer">Own</a>. All Rights Reserved 2020</footer>

</main>
@endsection
