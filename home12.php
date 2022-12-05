<!DOCTYPE html>
<html>
<head>
	<title>PROJECT PAGE</title><!-- for slide show home-->
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
  *{box-sizing: border-box;}

body {}
.mySlides {display: none;}
img {vertical-align: middle; border: 4px solid blue; }

/* Slideshow container */
.slideshow-container {
  max-width: 1690px;
  max-height: 28%;
  position: relative;
  margin: auto;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
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
  <!--this is header of page-->
	<div style="background-color:#0066cc; padding: 5px;" class="">
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="im1.jpg" style="width:900px; height:520px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="im2.jpg" style="width:900px; height:520px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="im3.jpg" style="width:900px; height:520px;">
  
</div>

</div>
<br>

<div style="text-align:center">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</iframe>
</div>
</body>
</html>
