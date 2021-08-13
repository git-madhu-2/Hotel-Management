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
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home" style="color:#fff; font-size:16px">Home</a></li>
		    <li><a href="image gallery.php"title="Gallery" style="color:#fff; font-size:16px">Gallery </a></li>
			<li><a href="contact us.php"title="About" style="color:#fff; font-size:16px">Contact Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="admin login.php"title="Admin Login" style="color:#fff; font-size:16px"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Login</a></li>

      </ul>
    </div>
  </div>
</nav>   