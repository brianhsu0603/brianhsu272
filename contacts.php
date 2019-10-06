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
<h1>Contacts</h1>
<?php
$fn = fopen("272contacts.txt","r") or die("fail to open file");
  while($row = fgets($fn)){
    echo"<p>".$row."</p>";
  }
  fclose($fn);
    
?>
</body>
</html>
