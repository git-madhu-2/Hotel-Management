<?php 
session_start();

error_reporting(1);
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="images/hotel.jpg"/width="200px"height="50px"style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li><a href="room details.php"title="Home" style="color:#fff; font-size:16px">Room Details</a></li>
		    <li><a href="booking details.php"title="Gallery" style="color:#fff; font-size:16px">Booking Details </a></li>
			<li><a href="users.php"title="About" style="color:#fff; font-size:16px">Users </a></li>
			<li><a href="change password.php"title="About" style="color:#fff; font-size:16px">Change password </a></li>
			<li><a href="index.php"title="About" style="color:#fff; font-size:16px">Logout </a></li>
			
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        
      </ul>
    </div>
  </div>
</nav>   