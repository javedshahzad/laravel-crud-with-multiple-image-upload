<?php

?>



<nav class="navbar navbar-default">
    <div class="">
      <div class="collapse navbar-collapse bg-info" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Dashboard</a></li>              
        </ul>
        <ul class="nav navbar-nav navbar-right">            
         @if(Session::has('user'))
         <li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

             {{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif

         
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>