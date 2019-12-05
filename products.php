<!DOCTYPE html>
<html>
<head>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
</style>






</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="password.html">Login</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="form.html">Register</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="allusers.php">All Users</a></li>
</ul>
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

<?php
  for($i=1;$i<=5;$i++){
    $cookieName = "lastVisited{$i}";
    echo" Product {$_COOKIE[$cookieName]}<br>";
  }
?>
 
</body>
</html>
