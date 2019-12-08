<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php
        include 'nav.php';
        ?>
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
