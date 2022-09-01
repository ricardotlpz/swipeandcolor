<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../flexboxgrid.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../../node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
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
    <a href="../../index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../../pricing.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PRICING</a>
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
  <a href="../../pricing.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PRICING</a>
  <a href="../../portfolio.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PORTFOLIO</a>
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
  </div>

<!-- Here goes the images -->
  <?php
  #$fi = new FilesystemIterator("../../showoff_images", FilesystemIterator::SKIP_DOTS);
  #printf("There were %d Files", iterator_count($fi));
  #$fi = iterator_count($fi);

    $directory="../../showoff_images/";
    $images=glob($directory . "*.jpg");
    $lazyload = "lazy";
    $divclass = "grid-item";
    $buttonId = "addButton";

    echo '<div class="grid">';
    foreach($images as $image) {
          echo 
            "
            <img id=". $buttonId ." data-enlargeable class=". $divclass ." src=" .$image." loading =". $lazyload .">
            ",  PHP_EOL;     
  }
  echo '</div>';
  ?>

  <!-- Creates the masonry grid -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script>
            var elem = document.querySelector('.grid');
            imagesLoaded( elem, () => {
                var msnry = new Masonry( elem, {
                // options
                itemSelector: '.grid-item',
                columnWidth: 250,
                gutter: 10,
                isFitWidth: true
            });
            } )
            
  </script>


  <!-- Lets images go fullscreen -->
  <script type="text/javascript" >
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
          var src = $(this).attr('src');
          var modal;
            
          function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
          }
          modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
          }).click(function() {
            removeModal();
          }).appendTo('body');
          //handling ESC
          $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
              removeModal();
            }
          });
        });
  </script> 

  <!-- Creates button -->
  <script>
    let btn = document.createElement("button");
    btn.innerHTML = "Submit";
    btn.onclick = function () {
      createbutton("Button is clicked");
    };
    document.body.appendChild(btn);
  </script>

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

</div>
</body>
</html>