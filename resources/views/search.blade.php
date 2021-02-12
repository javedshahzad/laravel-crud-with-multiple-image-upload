@extends('master')
@section('content')

<div class="custom-product">
        
        <div class="col-sm-4">
          <a href="#">Filter</a>
          
        </div>
        <div class="col-sm-4">
           <h3>Search Results Products</h3>
            <div class="">
              @foreach ($details as $item)
              <div class="searched-item">
                <a href="details/{{$item['id']}}">
              <img class="trending-img" src="\upload_images\products\{{$item['gallery']}}">
                <div class="">
                <h3>{{$item['name']}}</h3>
                 <h3>{{$item['description']}}</h3>
                  <h3>{{$item['category']}}</h3>
                </div>
              </a>
              </div>  
              @endforeach
            </div>
          
        </div>
        
           
        
</div>
@endsection