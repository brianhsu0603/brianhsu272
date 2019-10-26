<!DOCTYPE html>

<html>
  <head>
    <title>Form vaildation</title>
</head>

<body>
  <?php
   extract($_POST);

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users
VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  
  
  
   ?>

   <p>Hi
     <strong>
       <?php print("$first_name");?>
</strong>
Thank you for registering.<br />
you have been added to the
<strong>
  <?php print("$users");?>
</strong>
<strong>the following information has been saved in our database:</strong><br/>
<table border = "0" cellpaddong = "0" cellspacing = "10">
<tr>
  <td>first_name</td>
  <td>last_name</td>
  <td>email</td>
  <td>home_address</td>
  <td>home_phone</td>
  <td>cell_phone</td>
</tr>

<tr>
  <?php
   print("<td>$first_name</td>
   <td>$last_name</td>
   <td>$email</td>
   <td>$home_address</td>
   <td>$home_phone</td>
   <td>$cell_phone</td>
   ");
   ?>
   </tr>
</table>
   <a href="form.html">Back</a>
</body>
</html>
