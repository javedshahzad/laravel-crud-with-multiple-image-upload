@extends('master')
@section('content')
  <div class="container">
  @if ($message = Session::get('status')) <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div> @endif
        <?php 
        session()->remove("status");
        ?> 
<h2 class="personal-info">All Users </h2>
        @foreach ($data as $key => $item)
        <div class='row borderRow'>
            <div class='col-lg-4 col-md-4 col-sm-4'>
              <div class="row">
              
              @if($jsonDecode=json_decode($item->property_picture))
            @foreach ($jsonDecode as $key)
            <div class="col-lg-6 col-md-6 col-sm-6">
              <img src="\property-image\{{$key}}" alt='' class='bookingImg'>
              </div>
              @endforeach
              @endif
              
              </div>
           
            </div>
            <div class='col-lg-8 col-md-8 col-sm-8'>
              <h4 class='text-light'>Name: <span class='display-3 text-primary'>{{$item->name}}</span></h4>
              <h4 class='text-light'>User name: <span class='display-3 text-primary'>{{$item->username}}</span></h4>
              <h4 class='text-light'>Address: <span class='display-3 text-primary'>{{$item->address}}</span></h4>
              <h4 class='text-light'>Phone: <span class='display-3 text-primary'>{{$item->phone}}</span></h4>
              <h4 class='text-light'>Email : <span class='display-3 text-primary'>{{$item->email }}</span></h4>
              <h4 class='text-light'>Property owner: <span class='display-3 text-primary'>{{$item->property_owner}}</span></h4>
              <h4 class='text-light'>Property name: <span class='display-3 text-primary'>{{$item->property_name}}</span></h4>
              <h4 class='text-light'>Property Type: <span class='display-3 text-primary'>{{$item->property_type}}</span></h4>
              <h4 class='text-light'>Allotment type: <span class='display-3 text-primary'>{{$item->allotment_type}}</span></h4>
              <h4 class='text-light'>Quantity Allotment: <span class='display-3 text-primary'>{{$item->name}}</span></h4>
              <h4 class='text-light'>Property location: <span class='display-3 text-primary'>{{$item->property_location}}</span></h4>
              <h4 class='text-light'>Status:
                @if($item->status === 'approved')
                 <span class='display-3 text-success' style="text-transform: capitalize;">{{$item->status}}</span>
                 @else
                 <span class='display-3 text-danger' style="text-transform: capitalize;">{{$item->status}}</span>
                 @endif
            </h4>
             
              <a href="\property-docs\{{$item->property_docs}}" download>Download Docs File</a>
              <br>
              <br>
              @if(Session::has('user'))
              <a href="edit/{{$item->id}}" class="btn btn-success">Edit Details</a>
              <a href="delete/{{$item->id}}" class="btn btn-danger">Delete</a>
              @endif
            </div>
          </div>
          @endforeach

  </div>
<br>
<br>
<br>
<br>

@endsection