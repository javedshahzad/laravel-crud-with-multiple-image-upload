
@extends('master')
@section('content')

<div class="container">

   <form  action="addproduct" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
   @csrf
  <div class="form-group input-group">

     <label for="exampleInputEmail1">Name Product: </label>
        <input name="name" class="form-control" placeholder="Full name" type="text" id="name">
    </div>
    <span id="username" style="color: red"></span> <!-- form-group// -->
    <div class="form-group input-group">
     <label for="exampleInputEmail1">Price :</label>
        <input name="price" class="form-control" placeholder="Enter Price" type="number" id="price"> 
    </div> <span id="useremail" style="color: red"></span>


    <div class="form-group input-group">
     
        <label for="exampleInputEmail1">Category:</label>
       <select name="category" id="category" class="form-control">
        <option value="">Select Category</option>
         <option value="Mobile">Mobile</option>
         <option value="TV">TV</option>
         <option value="CAR">CAR</option>
         <option value="Laptop">Laptop</option>
       </select> 
    </div>
    <span id="cattagry" style="color: red"></span> 

          <div class="form-group">
                  <label class="form-group">Description :</label>
                  <textarea name="description" rows="4" cols="15" placeholder="Enter Description Here" id="description" class="form-control"></textarea>
                </div>
   <span id="descrp" style="color: red"></span> 

 <div class="form-group">
      <label for="email">Image:</label>
      <input type="file" class="form-control" name="image" id="gallery">
    </div>
     <span id="filee" style="color: red"></span> 

  
    <div class="form-group">
        <button   type="submit" class="btn btn-primary">Register</button>
    </div> 
                                                               
</form>

</div>



<script type="text/javascript">

       
            function validation(){
          var name = $('#name').val();
          var price = $('#price').val();
         
         
          var category = $('#category').val();
          var description = $('#description').val();
          var gallery = $('#gallery').val();
         
         

       if(name==""){
           $('#username').html('<p>**Please fill Your Name</p>').fadeIn('slow'); 
           $('#username').delay(3000).fadeOut('slow');
        return false;
      }
      if(price==""){
           $('#useremail').html('**Please fill Your price').fadeIn('slow'); 
           $('#useremail').delay(3000).fadeOut('slow');
        return false;
      }
      
     
      if(category==""){
           $('#cattagry').html('**Please fill Your category').fadeIn('slow'); 
           $('#cattagry').delay(3000).fadeOut('slow');
        return false;
      }

        if(description==""){
           $('#descrp').html('**Please fill Your description').fadeIn('slow'); 
           $('#descrp').delay(3000).fadeOut('slow');
        return false;
      }
        if(gallery==""){
           $('#filee').html('**Please fill Your gallery').fadeIn('slow'); 
           $('#filee').delay(3000).fadeOut('slow');
        return false;
      }
}
</script>

@endsection

