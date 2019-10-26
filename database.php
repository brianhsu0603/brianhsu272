<?php
extract($_POST);
$query = "insert into users values(".$first_name.",".$last_name.",".$email.",".$home_address.",".$home_phone.",".$cell_phone.");";
$database_connection = mysqli_connect("localhost","root","asdzxc0603","smarthome");
$result = mysqli_query($query, "smarthome");
?>
