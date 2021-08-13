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
         
              <div class="panel-heading" style="text-align: center; font-size: 20px;color:black;border: 1px;margin-top:25px;background-color:#F5F5F5;"><b>Add room</b></div>
			  
            <div class="panel-body" style="font-size: 16px; padding: 10px 50px 10px 50px;"><br>
    <center>
    <div class="panel" style="margin: 80px 10px 80px 10px;margin-top:20px ">

        <div class="panel-body">
            
<form method="post" enctype="multipart/form-data" style="height:300px">
<table class="table table-bordered">
	
	<tr>	
		<th>Room No</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add" style="margin-left:525px"name="add"/>
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
