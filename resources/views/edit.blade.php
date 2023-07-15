



@extends('java')

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="\css\style.css"> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <div class="main-w3layouts wrapper">
    <h1>Update Form </h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
      <h2 class="personal-info"> Personsal Info </h2>
        <form  action="/update/{{$data['id']}}" method="POST" onsubmit="return validation()" enctype="multipart/form-data" >
           @csrf
          <input class="text" type="text" name="name" placeholder="Your Name" value="{{$data['name']}}" required>

             <input class="text email" type="text" name="username" placeholder="Username" value="{{$data['username']}}" required="">
             <input class="text email" type="text" name="address" placeholder="Address" required="" value="{{$data['address']}}">
             <input class="text email" type="text" name="phone" placeholder="Phone" required="" value="{{$data['phone']}}">
             <h2 class="personal-info"> Property Info </h2>
             <input class="text email" type="text" name="property_owner" placeholder="Property Owner" required="" value="{{$data['property_owner']}}">
             <input class="text email" type="text" name="property_name" placeholder="Property name" required="" value="{{$data['property_name']}}">
             <br>
             <label for="property_type" class="personal-info">Property type</label>
            <select name="property_type" placeholder="Property type" id="property_type" class="text email" style="width: 95%;
            height: 25px;border: solid 1px rgba(255, 255, 255, 0.37);    margin: 10px 0;" value="{{$data['property_type']}}">
            <option value="Rented">Rented</option>
            <option value="Owned">Owned</option>
            <option value="Other">Other</option>
            </select>
            <br>
            <label for="allotment_type" class="personal-info"> Allotment type</label>
            <select name="allotment_type" placeholder=" Allotment type" id="allotment_type" class="text email" style="width: 95%;
            height: 25px;border: solid 1px rgba(255, 255, 255, 0.37);    margin: 10px 0;" value="{{$data['allotment_type']}}">
            <option value="Full property">Full property</option>
            <option value="Floors">Floors</option>
            <option value="Rooms">Rooms</option>
            </select>
            <br>
            <input class="text email" type="text" name="quantity_allotment" placeholder="Quantity of allotment" required="" value="{{$data['quantity_allotment']}}">
             <input class="text email" type="text" name="property_location" placeholder="Property location" required="" value="{{$data['property_location']}}">
             <label for="allotment_type" class="personal-info">Status</label>
            <select name="status" placeholder="status" id="status" class="text email" style="width: 95%;
            height: 25px;border: solid 1px rgba(255, 255, 255, 0.37);    margin: 10px 0;" value="{{$data['status']}}">
            <option value="received">Received</option>
            <option value="approved">Approved</option>
            </select>
          <input type="submit" name="submit" id="submit" value="Update">
        </form>
      </div>
    </div>
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->




