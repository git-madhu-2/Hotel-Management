<?php
      include('adminmenu.php')
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Hotel Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  </head>
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <body>
<div class="container-fluid text-center"id="primary" "><!--Primary Id-->
 <div class="panel" style="height:550px; width:1300px ; margin-top:85px; margin-left:125px; background-color:#D5E6F5 ">
         
              <div class="panel-heading" style="text-align: center; font-size: 20px;color:black;border: 1px;margin-top:25px;background-color:#F5F5F5;"><b>Change Password</b></div>
			  
            <div class="panel-body" style="font-size: 16px; padding: 10px 50px 10px 50px;"><br>
    <center>
    <div class="panel" style="margin: 80px 10px 80px 10px;margin-top:20px ">

        <div class="panel-body">
            
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Change Password</h1><hr>
	<tr style="height:40">
		<th>Enter Your old Password</th>
		<td><input type="password" name="op" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th>Enter Your New Password</th>
		<td><input type="password" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Enter Your Confirm Password</th>
		<td><input type="password" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
		</td>
	</tr>
</table> 
</form>
            <br>
           </div>
    </div>
    </center>
	
    </div>
  </div>


	  <footer style="background-color: #0D0D0D ; color: white; height:30px;font-size:16px">
         	<center>Copyright © 2020 | Madhu Sravani </center>
         </footer>
		 
  </body>
</html>
