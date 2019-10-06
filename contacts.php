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

 
      $contacts = file('./contacts.txt');
      foreach ($contacts as $contact) {
        $contact_info = explode(',', $contact);
        echo "<h3>$contact_info[0]</h3><p>$contact_info[1]</p><p>$contact_info[2]</p><p>$contact_info[3]</p>
      }
    
?>
</body>
</html>
