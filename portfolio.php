<!DOCTYPE html>
<html lang="en">
<head>
<title>Swipe and Color</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="pricing.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PRICING</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <!--
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Button1</a>
        <a href="#" class="w3-bar-item w3-button">Button2</a>
        <a href="#" class="w3-bar-item w3-button">Button3</a>
      </div>
      -->
    </div>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="pricing.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PRICING</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Portfolio Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="weddings">
    <h2 class="w3-wide">OUR EXPERIENCE</h2>
    <p class="w3-opacity"><i>Professional photographers</i></p>
    <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- DEPRECATED
      <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Rodrigo Reyes</p>
        <img src="portfolio_images/rodrigo_reyes.jpg" class="w3-round w3-margin-bottom" alt="Rodrigo Reyes" style="width:60%">
        <p><b>Grand master</b></p>
      </div>
      <div class="w3-third">
        <p>Ricardo Tejada</p>
        <img src="portfolio_images/ricardo_tejada.jpg" class="w3-round w3-margin-bottom" alt="Ricardo Tejada" style="width:60%">
        <p><i>Great carrying lenses</i></p>
      </div>
      <div class="w3-third">
        <p>Alberto Galicia</p>
        <img src="portfolio_images/alberto_galicia.jpg" class="w3-round" alt="Alberto Galicia" style="width:60%">
        <p><small>he brings the coffee</small></p>
      </div>
    </div>
    -->
  </div>

  <!-- The Showoff Section -->
  <div class="w3-black" id="pricing">
    <div class="w3-container w3-content w3-padding-64" style="width:100%">
      <h2 class="w3-wide w3-center">SHOWOFF</h2>
      <p class="w3-opacity w3-center"><i>A photo speaks more by itself</i></p><br>
      <div id="showoff_gallery">

      <!-- Loads all images in a folder to the Showoff section -->
        <?php
            $directory="showoff_images/";
            $images=glob($directory . "*.jpg");
            $lazyload = "lazy";
            $measure = "100%";
            $distance = "20px";
            foreach($images as $image) {
                echo 
                "
                <h2 style = padding-top= ".$distance." padding-bottom= ".$distance." padding-right= ".$distance."  padding-left= ".$distance."></h2>
                <img src=" .$image." loading =". $lazyload ." height=".$measure." width=".$measure.">
                ";
                
            }
        ?>
      </div>
    </div>
  </div>
  
<!-- End Page Content --> 
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</body>
</html>