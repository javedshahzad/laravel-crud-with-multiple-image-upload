<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
  addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>
<link rel="stylesheet" href="\css\style.css">
<!---  css file  --->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<div class="main-w3layouts wrapper">
  <h1> Login </h1>
  <div class="main-agileinfo">
    <div class="agileits-top"> 
      @if ($message = Session::get('status')) <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div> @endif
        <?php 
        session()->remove("status");
        ?> 
<form action="login" method="POST" >
   @csrf <input class="text email" type="email" name="email" placeholder="Email" required="">
        <input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
        <div class="wthree-text">
          <label class="anim" for="checkbox" style="display: flex;
    gap: 8px;">
            <input type="checkbox" class="checkbox" required="" name="checkbox" id="checkbox">
            <span style="margin-top: 4px;">I Agree To The Terms & Conditions</span>
          </label>
          <div class="clear"></div>
        </div>
        <input type="submit" name="submit" id="submit" value="Login">
      </form>
      <p>Don't have an Account? <a href="/register"> Register Now!</a>
      </p>
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