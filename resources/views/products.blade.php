@extends('master')
@section('content')

<p>kkkkkkkkkkkkkkkkkkkkkk</p>
<div class="custom-product">
 @if(\Session::has('success'))
<h2 style="color: green; text-align: center;">
{{\Session::get('success')}}
</h2>
@endif
<p>kkkkkkkkkkkk</p>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              @foreach ($data as $item)
              <div class="item {{$item['id']==1?'active':''}} ">
              <a href="details/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}" alt="Chania">
                <div class="carousel-caption slider-text">
                <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
              </a>
              </div>  
              @endforeach
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="trending-wrapper">
            <h1>Trending Products</h1>
            <div class="">
              @foreach ($data as $item)
              <div class="tredning-item">
                <a href="details/{{$item['id']}}">
              <img class="trending-img" src="{{$item['gallery']}}">
                <div class="">
                <h3>{{$item['name']}}</h3>
                </div>
              </a>
              </div>  
              @endforeach
            </div>
          </div>
</div>
@endsection