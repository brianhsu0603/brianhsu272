<!DOCTYPE html>
<html>
<head>
</head>
<body>



<?php
//include 'users.php';
$ch1 = curl_init();
curl_setopt($ch1,CURLOPT_URL, "54.193.64.46/users.php");
curl_setopt($ch1,CURLOPT_RETURNTRANSFER, 1);
$results1 = curl_exec($ch1);
curl_close($ch1);
echo $results1;
echo "<br>";
?>

<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://webdesignfun.com/allusers.php");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$contents = curl_exec ($ch);

echo $contents;

curl_close ($ch);

?>

</body>
</html>
