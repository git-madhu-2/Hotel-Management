<?php
      include('usermenu.php')
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
    
        <div class="panel" style="height:500px; width:1000px ; margin-top:85px; margin-left:225px; background-color:#D5E6F5 ">
            <div class="panel-heading" style="text-align: center; font-size: 20px;color:black;border: 1px;margin-top:25px;background-color:#F5F5F5;"><b>User Info</b></div>
            <div class="panel-body" style="font-size: 16px; padding: 10px 50px 10px 50px;"><br>
                <div class="row">
                    <div class="col-md-6">
                    <form class="form-horizontal" action="event.html">
                    
                 <div class="form-group">
                  <div class="col-sm-1" style:></div>
                  <label class="control-label col-sm-3" for="email">Name:</label>
                  <div class="col-sm-6">
                    <input type="name" class="form-control" id="email" placeholder="Enter First Name" value="Madhu Sravani" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-1"></div>
                  <label class="control-label col-sm-3" for="email">Email:</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email address" value="sravani@gmail.com" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                 
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                 <label class="control-label  col-sm-3"  for="dept">Gender:</label>
                  <div class="col-sm-6">
                  <select class="form-control " id="dept">
                    <option disabled>Male</option>
                    <option selected>Female</option>
                    <option disabled>others</option>
                    
                  </select>
                </div></div>
                 <div class="form-group">
                  <div class="col-sm-1"></div>
                  <label class="control-label col-sm-3" for="email">City:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="city" placeholder="Enter City" value="Secunderabad" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                  
             </form>
         </div>
          <div class="col-md-6">
                    <form class="form-horizontal" action="event.html">
                        <div class="form-group">
                  <div class="col-sm-1"></div>
                  <label class="control-label col-sm-3" for="dob">Date Of Birth:</label>
                  <div class="col-sm-6">
                    <input type="Date" class="form-control" id="dob" value="2001-08-02" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                       
                 <div class="form-group">
                  
                  <label class="control-label col-sm-4" for="email">Phone Number:</label>
                  <div class="col-sm-6">
                    <input type="tel" class="form-control" id="email" placeholder="Enter 10 digit mobile number" value="9505380148" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                  
                 <div class="form-group">
                  <div class="col-sm-1"></div>
                  <label class="control-label col-sm-3" for="email">State:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" placeholder="Enter State" value="Telangana" style="background-color: white;" readonly>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-1"></div>
                  <label class="control-label col-sm-3" for="email">Address:</label>
                  <div class="col-sm-6">
                   <textarea class="form-control" rows="5" id="comment"  style="background-color: white;align:right" readonly>
                    4-90
                    Kukatpally
                    Secunderabad
                    Telangana
                   </textarea>
                  </div>
                   <div class="col-sm-2"></div>
                 </div>
                    
                   
               </form>

            </div>
        </div></div></div>
       <footer style="background-color: #0D0D0D ; color: white; height:30px;font-size:16px">
         	<center>Copyright © 2020 | Madhu Sravani </center>
         </footer>


</body>
</html>