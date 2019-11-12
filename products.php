<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="news.php">News</a>
  <a href="contacts.php">Contacts</a>
  <a href="products.php">Products</a>
  <a href="about.php">About</a>
</div>
<h1>Products</h1>
  
<a href="p1.html">1.House Keeper robot</a><br>
<a href="p2.html">2.Security Robot</a><br>
<a href="p3.html">3.Voice Assistant</a><br>
<a href="p4.html">4.soccer robot</a><br>
<a href="p5.html">5.basketball robot</a><br>
<a href="p6.html">6.tennis robot</a><br>
<a href="p7.html">7.golf robot</a><br>
<a href="p8.html">8.table tennis robot</a><br>
<a href="p9.html">9.swim robot</a><br>
<a href="p10.html">10.baseball robot</a><br>
 
<?php 

 

  echo <h2>Page History</h2>
  
  foreach ($_COOKIE as $key=>$value) {
  echo '<li><a href="'.$value.'" class="link">'.$value.'</a><li>';
  }
 
  
  


?>


  

</body>
</html>
