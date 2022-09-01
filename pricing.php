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
    <a href="portfolio.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PORTFOLIO</a>
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
  <a href="portfolio.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PORTFOLIO</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Portfolio Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="weddings">
    <h2 class="w3-wide">INVEST IN YOUR MEMORIES</h2>
    <p class="w3-opacity"><i>Great prices for unbeatable quality</i></p>
    <p class="w3-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
      Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
      sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? 
      Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?.</p>

      <!--
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
  </div>
      -->


  <!-- The Pricing Section -->
  <div class="w3-black" id="pricing">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PRICING</h2>
      <p class="w3-opacity w3-center"><i>Book a session with us!</i></p><br>
      <!--
      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>
      -->

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="pricing_miniatures/pricing1.jpg" alt="Pricing" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Essential</b></p>
            <p class="w3-opacity">$2,000 USD</p>
            <p>1 Camera</p>
            <p>Color and B&W</p>
            <p>60 4k photos</p>
            <p>15 edited 4k photos</p>
            <p>Full HD wedding video</p>
            <p>90 days full-res photo cloud storage</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="pricing_miniatures/pricing2.jpg" alt="Pricing" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Plus</b></p>
            <p class="w3-opacity">$4,200 USD</p>
            <p>2 Cameras</p>
            <p>Color and B&W</p>
            <p>90 4k photos</p>
            <p>25 edited 4k photos</p>
            <p>Full HD wedding video</p>
            <p>180 days full-res photo cloud storage</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="pricing_miniatures/pricing3.jpg" alt="Pricing" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Premium</b></p>
            <p class="w3-opacity">$6,100 USD</p>
            <p>3 Cameras</p>
            <p>Color and B&W</p>
            <p>110 4k photos</p>
            <p>40 edited 6k photos</p>
            <p>4K wedding video</p>
            <p>1 year full-res photo cloud storage</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- The Contact Section -->
 <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Special requirements? Reach us!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom" style="text-align:left">
        <i class="fa fa-map-marker" style="width:30px"></i> Querétaro, MX<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +52 4421234567<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: quotation@swipeandcolor.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div> 
<!-- End Page Content --> 
</div>
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

<!-- Image of location/map -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <img src="footer_images/footer2.jpg" class="w3-image w3-greyscale-min" style="width:100%">
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
</body>
</html>