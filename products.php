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
  
<a href="p1.php">1.House Keeper robot</a><br>
<a href="p2.php">2.Security Robot</a><br>
<a href="p3.php">3.Voice Assistant</a><br>
<a href="p4.php">4.soccer robot</a><br>
<a href="p5.php">5.basketball robot</a><br>
<a href="p6.php">6.tennis robot</a><br>
<a href="p7.php">7.golf robot</a><br>
<a href="p8.php">8.table tennis robot</a><br>
<a href="p9.php">9.swim robot</a><br>
<a href="p10.php">10.baseball robot</a><br>
  
<h1>Last 5 visited products</h1>
<table>
<?php
  $count = 0;
  foreach($_COOKIE as $key => $value){
  if ($count<5){
  print("<tr>
    <td>$value</td></tr>");
    $count++;
  }
}


  
 ?>
  </table>
  
 



  

</body>
</html>
