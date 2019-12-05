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

extract($_POST);
echo $searchText;
 

$query = "SELECT * from users as u where 
u.first_name like '%$searchText' or 
u.last_name like '%$searchText' or
u.email like '%$searchText' or 
u.home_address like '%$searchText' or 
u.home_phone like '%$searchText' or 
u.cell_phone like '%$searchText'";
 
if(!($database_connection = mysqli_connect("localhost","root","asdzxc0603","smarthome")))
die("couldn't connect to database");

 
 


if (!($result = mysqli_query($database_connection,$query))){
    print("Could not execute query!<br />");
    die(mysql_error());

}

echo mysqli_num_rows($result)." result(s) <br>";
?>

<h3 style = "color: blue">
Search Results</h3>

<table border = "1" cellpadding = "3" cellspacing = "2"
  style = "background-color:#ADD8E6">

<?php
echo "<tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Home adress</td><td>Home Phone</td><td>Cell Phone</td></tr>";
 for($counter = 0;
    $row = mysqli_fetch_row($result);
    $counter++){
        print("<tr>");

        foreach($row as $key => $value)
          print ("<td>$value</td>");
        
        print("</tr>");
    }

mysql_close($database);
?>
</table>

<br /> Your search yielded<strong>
<?php print("$counter") ?> results.<br /><br /></strong>
</body>
</html>

