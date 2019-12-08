<?php
$productNum = 4;
include 'cookies.php';
?>

<!DOCTYPE html>
<html>
  
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
<h1>4.soccer robot:</h1><br>
<p1>robot that can play soccer.</p1><br>
<img src="soccer.jpg"><br>
<a href="products.php">Back to Products</a></br>
 <button id="cart_button">Add to cart</button>
    <?php
    include 'purchase.php';
   
    include 'fetchReviews.php';
       
    ?>
    
    </body>
    </html>
