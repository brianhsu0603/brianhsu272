<?php
$productNum = 8;
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
     .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  </style>
  <body>
  <img src="http://manisharigala.000webhostapp.com/trackItem.php?num=11" style="display: none">
       
    <?php
        include 'index.php';
    include 'fetchRating.php';
    
        ?>

<h1>8.table tennis Robot:</h1><br>
<p1>robot that play table tennis.</p1><br>
<img src="table tennis.jpg"><br>
<a href="products.php">Back to Products</a></br>
 <button id="cart_button">Add to cart</button>
    <?php
    include 'purchase.php';
   
    include 'fetchReviews.php';
       
    ?>
    
    </body>
    </html>
