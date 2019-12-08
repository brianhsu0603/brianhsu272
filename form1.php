<!DOCTYPE html>
<html>
<head>
</head>
   
<body>
<?php
include 'nav.php';
?>

<form method = "post" action="form.php">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an user.</p>
      <hr>
  
      <label for="first_name"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="first_name" required>
  
      <label for="last_name"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="last_name" required>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      
      <label for="home_address"><b>Home Address</b></label>
      <input type="text" placeholder="Enter Home Address" name="home_address" required>
  
      <label for="home_phone"><b>Home Phone</b></label>
      <input type="text" placeholder="Enter Home Phone" name="home_phone" required>
  
      <label for="cell_phone"><b>Cell Phone</b></label>
      <input type="text" placeholder="Enter Cell Phone" name="cell_phone" required>
      
      <hr>
  
      <p>By creating an user you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Register</button>
    </div>
  </form>
    <a href="data.html">Search Users</a>


</body>
</html>
