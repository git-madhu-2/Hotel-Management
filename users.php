fdx<?php
      include('adminmenu.php')
  ?>
  <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Hotel Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	

    </style>
</head>
<body>
<div class="container-fluid text-center"id="primary" "><!--Primary Id-->
 <div class="panel" style="height:600px; width:1300px ; margin-top:85px; margin-left:125px; background-color:#D5E6F5 ">
         
              <div class="panel-heading" style="text-align: center; font-size: 20px;color:black;border: 1px;margin-top:25px;background-color:#F5F5F5;"><b>Users</b></div>
            <div class="panel-body" style="font-size: 16px; padding: 10px 50px 10px 50px;"><br>
    <center>
    <div class="panel" style="margin: 80px 10px 80px 10px;margin-top:20px ">

        <div class="panel-body">
            <table class="table table-striped" id="table">
                <thead><th>S.No</th><th>Name</th><th>Email</th><th>Mobile Number</th><th>Address</th><th>Gender</th><th>Country</th></thead>
                <tbody>
                    <tr>
                        <td>1</td><td>Sumit</td><td>sumit@gmail.com</td><td>8405186523</td><td>Vizag</td><td>Male</td><td>India</td></tr>
                        <tr><td>2</td><td>Om</td><td>om@gmail</td><td>9505178524</td><td>Kukatpally</td><td>Male</td><td> India</td></tr>
                        <tr><td>3</td><td>Rangini</td><td>ragini@gmail</td><td>7505178574</td><td>Hyderabad</td><td>Female</td><td>India</td></tr>
                        <tr><td>4</td><td>Anjali</td><td>anjali@gmail</td><td>8805178861</td><td>Vijayawada</td><td>Female</td><td> India</td></tr>
                        <tr><td>5</td><td>Sajeev</td><td>sajeev@gmail</td><td>9905172424</td><td>Araku</td><td>Male</td><td> India</td></tr>
                        <tr><td>6</td><td>Madhu</td><td>madhu@gmail</td><td>7205178361</td><td>Nallajerla</td><td>Female</td><td> India</td></tr>
                        
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
		 <html>