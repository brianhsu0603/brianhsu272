<!DOCTYPE html>
<html>
<body>
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

