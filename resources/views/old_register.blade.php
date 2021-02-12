

@section('content')

<div class="container">

   <form  action="register" method="POST" onsubmit="return validation()" >
   @csrf
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
     <label for="exampleInputEmail1">Name: </label>
        <input name="name" class="form-control" placeholder="Full name" type="text" id="name">

    </div>
    <span id="username" style="color: red"></span> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div><label for="exampleInputEmail1">Email address</label>
        <input name="email" class="form-control" placeholder="Email address" type="email" id="email"> 
    </div> <span id="useremail" style="color: red"></span>


    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div><label for="exampleInputEmail1">Password:</label>
        <input name="password" class="form-control" placeholder="Create password" type="password" id="password"> 
    </div> <span id="userpassword" style="color: red"></span> <!-- form-group// -->
  
    <div class="form-group">
        <button name="submit" id="submit" type="submit" class="btn btn-primary">Register</button>
    </div> 
                                                               
</form>

</div>



<script type="text/javascript">

       
            function validation(){
          var name = $('#name').val();
          var email = $('#email').val();
         
         
          var password = $('#password').val();
         
         

       if(name==""){
           $('#username').html('<p>**Please fill Your Name</p>').fadeIn('slow'); 
           $('#username').delay(3000).fadeOut('slow');
        return false;
      }
      if(email==""){
           $('#useremail').html('**Please fill Your Email').fadeIn('slow'); 
           $('#useremail').delay(3000).fadeOut('slow');
        return false;
      }
      
     
      if(password==""){
           $('#userpassword').html('**Please fill Your Password').fadeIn('slow'); 
           $('#userpassword').delay(3000).fadeOut('slow');
        return false;
      }
}
</script>

@endsection

