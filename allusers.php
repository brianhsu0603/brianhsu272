<!DOCTYPE html>
<html>
<body>

<?php
$query = "SELECT * from users";
 
if(!($database_connection = mysqli_connect("localhost","root","asdzxc0603","smarthome")))
die("couldn't connect to database");
 
 
if (!($result = mysqli_query($database_connection,$query))){
    print("Could not execute query!<br />");
    die(mysql_error());
}
echo mysqli_num_rows($result)." result(s) <br>";
?>

<h3 style = "color: blue">
User List</h3>

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



<div>
<?php
$ch = curl_init();



curl_setopt($ch, CURLOPT_URL,"http://webdesignfun.com/allusers.php");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$contents = curl_exec ($ch);

echo $contents;


curl_close ($ch);

?>
</div>

</body>
</html>
