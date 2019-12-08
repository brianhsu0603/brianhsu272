<?php
$productNum = 10;
include 'cookies.php';
?>

<!DOCTYPE html>
 <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  <link rel="stylesheet" href="rating.css">
  <style>
    .checked{
      color:orange;
    }
  </style>
  <body>
  <img src="http://manisharigala.000webhostapp.com/trackItem.php?num=11" style="display: none">
       
    <?php
        include 'index.php';
    include 'fetchRating.php';
    
        ?>
       
<h1>10.baseball Robot:</h1><br>
<p1>robot that plays baseball.</p1><br>
<img src="baseball.jpg"><br>
<a href="products.php">Products</a>
   
        <?php
       include 'rating_code.php';
    ?>
    </body>
    </html>
