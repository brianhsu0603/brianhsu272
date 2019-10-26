<!DOCTYPE html>
<html>
<body>
<?php

extract($_POST);
 


$query = "SELECT".$select."FROM users";
if(!($database_connection = mysqli_connect("localhost","root","asdzxc0603","smarthome")))
die("couldn't connect to database");

if(!mysql_select_db("smarthome",$database))
 die("could not open smarthome database");

if (!($result = mysql_query($query, $database))){
    print("Could not execute query!<br />");
    die(mysql_error());

}

?>

<h3 style = "color: blue">
Search Results</h3>

<table border = "1" cellpadding = "3" cellspacing = "2"
  style = "background-color:#ADD8E6">

<?php

 for($counter = 0;
    $row = mysql_fetch_row($result);
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

