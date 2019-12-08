<?php
$productNum = 5;
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
<h1>5.Basketball Robot:</h1><br>
<p1>Robot that play basketball.</p1><br>
<img src="basketball.jpg"><br>
<a href="products.php">Back to Products</a></br>
 <button id="cart_button">Add to cart</button>
    <?php
    include 'purchase.php';
   
    include 'fetchReviews.php';
       
    ?>
    
    </body>
    </html>
