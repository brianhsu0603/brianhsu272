<?php
$productNum = 1;
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
<h1>1.House Keeper Robot:</h1><br>
<p1>Help you do the chores including washing the dishes and taking out the trash etc.</p1><br>
<img src="e72daebbd6add49be4f47b36d24c757c_600x.jpg"><br>
<a href="products.php">Products</a>
 <button id="cart_button">Add to cart</button>
    <?php
    include 'purchase.php';
   
    include 'fetchReviews.php';
       
    ?>
        

    
    </body>
    </html>
 
