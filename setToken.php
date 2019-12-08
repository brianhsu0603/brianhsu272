<?php 
  if(isset($_GET['token'])) {
    setcookie("userToken", $_GET['token'], time() + (84600 * 5),"/");
  }
?>