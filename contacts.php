<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Contacts</h1>
<?php
$myfile = fopen("272contacts.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("272contacts.txt"));
fclose($myfile);
?>
</body>
</html>
