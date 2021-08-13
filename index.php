<?php
      include('menubar.php')
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
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif; }
.mySlides {display: none;}

/* Slideshow container */
.slideshow-container {
  
  position: relative;
 
  
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div style="background-color:#E7E3DB ">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/reception.jpg" style="width:100%;height:75%">
  
</div>

<div class="mySlides fade">
  <img src="images/luxury room.jpg" style="width:100%;height:75%">
  
</div>

<div class="mySlides fade">
  <img src="images/auditorium.jpg" style="width:100%;height:75%">
  
</div>

</div>

</div>
<div style="background-color:#E7E3DB ">
<div style="text-align:center; margin-top:-25px">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
<h2 style="margin-left:135px;margin-top:20px; font-size:22px"><b>About</b></h2>
<p style="margin-left:145px;margin-right:145px;margin-top:20px; font-size:16px">A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre (with computers, printers, and other office equipment), childcare, conference and event facilities, tennis or basketball courts, gymnasium, restaurants, day spa, and social function services. 
</p>
 <p style="margin-left:145px;margin-right:145px; font-size:16px">Hotel rooms are usually numbered or named in some smaller hotels to allow guests to identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of a room and board arrangement. In the United Kingdom, a hotel is required by law to serve food and drinks to all guests within certain stated hours.[citation needed] In Japan, capsule hotels provide a tiny room suitable only for sleeping and shared bathroom facilities. 
 </p>
<p style="margin-left:145px;margin-right:145px; font-size:16px; margin-top:2px">The precursor to the modern hotel was the inn of medieval Europe. For a period of about 200 years from the mid-17th century, coaching inns served as a place for lodging for coach travelers. Inns began to cater to richer clients in the mid-18th century. One of the first hotels in a modern sense was opened in Exeter in 1768. Hotels proliferated throughout Western Europe and North America in the early 19th century, and luxury hotels began to spring up in the later part of the 19th century. Hotel operations vary in size, function, complexity, and cost. </p>
</p>
<h2 style="margin-left:135px;margin-top:20px; font-size:22px"><b>Services</b></h2>
<p style="margin-left:145px;margin-right:145px;margin-top:20px; font-size:16px">Full-service hotels often provide a wide array of guest services and on-site facilities. Commonly found amenities may include: on-site food and beverage (room service and restaurants), meeting and conference services and facilities, fitness center, and business center. Full-service hotels range in quality from mid-scale to luxury. This classification is based upon the quality of facilities and amenities offered by the hotel. [8] Examples include: Holiday Inn, Kimpton Hotels, Hilton, Marriott, and Hyatt Regency brands.


</p>
</div>
<footer style="background-color: #0D0D0D ; color: white; height:30px;font-size:16px">
         	<center>Copyright © 2020 | Madhu Sravani </center>
         </footer>
</body>
</html> 