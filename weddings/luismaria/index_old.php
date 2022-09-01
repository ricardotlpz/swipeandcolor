<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../flexboxgrid.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="/path/to/masonry.pkgd.min.js"></script>
</head>
<body>
<!-- Header -->
<div class="header">
  <h1>Responsive Image Gallery</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<!-- Here goes the images -->
<?php
$fi = new FilesystemIterator("../../showoff_images", FilesystemIterator::SKIP_DOTS);
printf("There were %d Files", iterator_count($fi));
$fi = iterator_count($fi);

  $items = ($fi/4);
  $directory="../../showoff_images/";
  $images=glob($directory . "*.jpg");
  $lazyload = "lazy";
  $measure = "100%";
  $distance = "20px";
  $cursor = "zoom-in";
  $rows = array_chunk($images, $items); #The second arg is the number of items per column
  
  echo '<div class="row">';
  foreach($rows as $row) {
    echo '<div class="column">', PHP_EOL;
    foreach($row as $fleximage) {
        echo 
          "
          <img data-enlargeable src=" .$fleximage." loading =". $lazyload ." style=", "width:".$measure." cursor:".$cursor.">
          ",  PHP_EOL;
        }
    echo '</div>', PHP_EOL;       
}
echo '</div>';
?>

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

</body>
</html>