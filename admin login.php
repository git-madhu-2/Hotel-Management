<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Payroll System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.flex-container {
            display: flex;
            flex-direction: row;
            background-color: brown;
            margin: 0px 2px 0px 2px;

        }
        .flex-container > div {
            align-self: center;
            color: white;
        }

     
    </style>
</head>
<?php
include('menubar.php');
	?>
<body>
	
    
	<div class="container" style="background-color:#E1E1D5; width:1600px; height:675px">
    <div class="row"><br>
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="border:0.1px solid;margin-top:115px; height:400px;width:450px; background-color:#fff ;">
			
			<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;">Login Form?</font></b></h1>

        <center>
              <div id="error" style="color: red;"></div><br>
				 <img src="images/user2.png"alt="Bird" width="120" height="120"style="margin-top:-15px;">
		
               <form class="form-horizontal" action="room details.php" method="post" name="loginform">
                 <div class="form-group" style="margin-top:15px">
                  
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
<footer style="background-color: brown; color: white;">
            <center>© Priya | Privacy Policy</center>
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
   if (email == "admin@gmail.com" && pass=="admin"){

   return true;
    
   }
   if(email=="user@gmail.com" && pass=="user"){
    loc+="userprofile.php";
    window.location= loc;
   }
   
    document.getElementById("error").innerHTML='<b>INVALID CREDENTIALS!</b>';
    return false;

  
}</script>
</body>
</html>