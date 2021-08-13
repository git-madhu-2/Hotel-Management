<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="../css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<?php
include('menubar.php');
	?>
<div class="container-fluid" "> <!-- Primary Id-->
  <div class="container" style="background-color:#E1E1D5; width:1600px; height:675px">
    <div class="row"><br>
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="border:0.1px solid;margin-top:115px; height:400px;width:450px; background-color:#fff ;">
			
			<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;">Login Form?</font></b></h1>

          <img src="images/user2.png"alt="Bird" width="120" height="120"style="padding-top:-5px;">
		
               <form class="form-horizontal" action="userprofile.php" method="post" name="loginform">
                 <div class="form-group" style="margin-top:25px">
                  
                  <label class="control-label col-sm-4" for="email">Email Address:</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control"  id="email" placeholder="Enter Email" required>
                  </div>
                 </div>
                  <div class="form-group">
                  
                  <label class="control-label col-sm-4" for="pass">Password:</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" required>
                  </div>
                  </div>
                  <input type="submit" name="submit" onclick="return validate()" style="background-color:#CBDCED ; width: 75px; height: 40px;" value="submit">
                    <br><br>
                    
                </form>
            </div>
        </div>
    </center>
</div>
<footer style="background-color: #0D0D0D ; color: white; height:30px;font-size:16px">
         	<center>Copyright © 2020 | Madhu Sravani </center>
         </footer>
<script type="text/javascript">





function validate(){
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var a=window.location.pathname.split("/");
    var loc="";
    
    for(let i=0;i< a.length -1;i++){
        loc+=a[i]+"/";
    }
   //admin validation
   if (email == "user@gmail.com" && pass=="user"){
   
   return true;
    
   }
   if(email=="admin@gmail.com" && pass=="admin"){
    loc+="room details.php";
    window.location= loc;
   }
   
    document.getElementById("error").innerHTML='<b>INVALID CREDENTIALS!</b>';
    return false;

}</script>
</body>
</html>