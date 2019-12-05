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
