@extends('master')
@section('content')

<div class="container">

  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="\upload_images\products\{{$details['gallery']}}">
    </div>
        <div class="col-sm-6">
      <a href="/" class="btn btn-primary">Go Back</a>

      <h2>Name : {{$details['name']}}</h2>
      <h3>Price : {{$details['price']}}</h3>
       <h3>Category : {{$details['category']}}</h3>
        <h3>Discreption : {{$details['description']}}</h3>
        <br><br>
        <form action="/add_to_cart" method="POST">
          <input type="hidden" name="product_id" value="{{$details['id']}}">
          @csrf
          <button class="btn btn-success" >Add to Cart</button>
        </form>
             <br><br>
        <button  type="submit" class="btn btn-info" >Buy Now</button>
    </div>
    
  </div>
  
</div>
@endsection