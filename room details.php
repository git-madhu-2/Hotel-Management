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
 <div class="panel" style="height:900px; width:1300px ; margin-top:85px; margin-left:125px; background-color:#D5E6F5 ">
         
              <div class="panel-heading" style="text-align: center; font-size: 20px;color:black;border: 1px;margin-top:25px;background-color:#F5F5F5;"><b>Room Details</b></div>
			  
            <div class="panel-body" style="font-size: 16px; padding: 10px 50px 10px 50px;"><br>
    <center>
    <div class="panel" style="margin: 80px 10px 80px 10px;margin-top:20px ">

        <div class="panel-body">
            <table class="table table-striped" id="table">
                <thead><th>S.No</th><th>Image</th><th>Room No</th><th>Type</th><th>Price</th><th>Details</th><th>Update</th><th>Delete</th></thead>
                <tbody>
                    <tr>
                        <td>1</td><td><img src="images/room1.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>512</td><td>Deluxe room</td><td>15000</td><td>The Contemporary yet simple designed King bedded rooms are well equipped with modern amenities. Fresh Decor is the winning combination to make these rooms an ideal choice</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:-55px'></span></a></td></td></tr>
                        <td>2</td><td><img src="images/luxury room.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>504</td><td>Luxurious suite</td><td>15000</td><td>Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>
                        <td>3</td><td><img src="images/room2.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>302</td><td>Standard room</td><td>15000</td><td>Simple design king bedded room are well equipped with modern amenities.</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>
                         <td>4</td><td><img src="images/room3.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>312</td><td>Suite</td><td>15000</td><td>Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space.</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>
                          <td>5</td><td><img src="images/room4.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>205</td><td>Twin Deluxe room</td><td>15000</td><td>The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>
                          <td>6</td><td><img src="images/parking area.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>0</td><td>Parking area</td><td>15000</td><td>ON-SITE PARKING Comfort Hotel Perth City provides 33 secure car parking spaces, free-of-charge for house guests which are subject to availability and on a ...</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>
                          <td>1</td><td><img src="images/auditorium.jpg" alt="img4 Not Show" style="width:90px;height:70px;">
       </td><td>0</td><td>Auditorium</td><td>15000</td><td>An auditorium is a room built to enable an audience to hear and watch performances. For movie theatres, the number of auditoria (or auditoriums) is expressed as the number of screens.</td><td><a href="update room.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
<td><a href="#" onclick="delRoom"><span class="glyphicon glyphicon-remove" style='color:red; margin-left:10px'></span></a></td></tr>


						</tr>
						<tr>
	<td colspan="8"><a href="add room.php" class="btn btn-primary" style="margin-left:500px;marrgin-bottom:725px">Add New Rooms</a></td>
	</tr>
                </tbody>
            </table>
            <br>
           </div>
    </div>
    </center>
	<script type="text/javascript">
    function Delete(r) {
        
        var table=document.getElementById("table");
        var i=r.parentNode.parentNode.rowIndex;
        table.deleteRow(i);
    }
      
  </script>
    </div>
  </div>


	  <footer style="background-color: #0D0D0D ; color: white; height:30px;font-size:16px">
         	<center>Copyright © 2020 | Madhu Sravani </center>
         </footer>
		 
  </body>
</html>
