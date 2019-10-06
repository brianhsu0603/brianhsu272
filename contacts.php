<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Contacts</h1>
<?php

  $fn = fopen("272contacts.txt","r");
  
  while(! feof($fn))  {
	$result = fgets($fn);
	echo $result <br>;
  }

  fclose($fn);

?>
</body>
</html>
