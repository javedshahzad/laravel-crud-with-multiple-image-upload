



@extends('java')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="\css\style.css">
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <div class="main-w3layouts wrapper">
    <h1>Registration </h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
      @if ($message = Session::get('status')) <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div> @endif
        <?php 
        session()->remove("status");
        ?> 
      <h2 class="personal-info"> Personsal Info </h2>
        <form  action="register" method="POST" enctype="multipart/form-data" >
           @csrf
          <input class="text" type="text" name="name" placeholder="Your Name" required>

             <input class="text email" type="text" name="username" placeholder="Username" required="">
             <input class="text email" type="text" name="address" placeholder="Address" required="">
             <input class="text email" type="text" name="phone" placeholder="Phone" required="">
             <input class="text email" type="email" name="email" placeholder="Email" required="">
             <h2 class="personal-info"> Property Info </h2>
             <input class="text email" type="text" name="property_owner" placeholder="Property Owner" required="">
             <input class="text email" type="text" name="property_name" placeholder="Property name" required="">
             <label for="property_type" class="personal-info">Property type</label>
            <select name="property_type" placeholder="Property type" id="property_type" class="text email" style="width: 95%;
            height: 25px;border: solid 1px rgba(255, 255, 255, 0.37);    margin: 10px 0;">
            <option value="Rented">Rented</option>
            <option value="Owned">Owned</option>
            <option value="Other">Other</option>
            </select>
            <br>
            <label for="allotment_type" class="personal-info"> Allotment type</label>
            <select name="allotment_type" placeholder=" Allotment type" id="allotment_type" class="text email" style="width: 95%;
            height: 25px;border: solid 1px rgba(255, 255, 255, 0.37);    margin: 10px 0;">
            <option value="Full property">Full property</option>
            <option value="Floors">Floors</option>
            <option value="Rooms">Rooms</option>
            </select>
            <br>
            <input class="text email" type="text" name="quantity_allotment" placeholder="Quantity of allotment" required="">
             <input class="text email" type="text" name="property_location" placeholder="Property location" required="">
             <label for="property_name" class="personal-info">Property picture</label>
             <input type="file" class="" name="property_picture[]" id="property_picture" accept="image/jpeg" required="" multiple>
             <p style="color:#fff;">Only jpeg format Images</p>
             <br>
             <label for="property_docs" class="personal-info">Legal property Docs</label>
             <input type="file" class="" name="property_docs" id="property_docs" accept=".pdf" required="">
             <p style="color:#fff;">Only pdf format Docs</p>
             <br>
             <input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
          <div class="wthree-text">
            <label class="anim" style="display: flex;
    gap: 8px;">
              <input type="checkbox" class="checkbox" required="">
              <span style="margin-top: 4px;">I Agree To The Terms & Conditions</span>
            </label>
            <div class="clear"> </div>
          </div>
          <input type="submit" name="submit" id="submit" value="Register">
        </form>
        <p>Have an Account? <a href="/login"> Login Now!</a></p>
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2023. All rights reserved</p>
    </div>
    <!-- //copyright -->
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




