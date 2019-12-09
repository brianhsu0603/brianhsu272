

<?php
extract($_GET);
$pid = $_GET['pid'];
$pageName= $pid;
$pageTitle="Reviews for {$pid}";
include('../header.php');
?>

<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  <link rel="stylesheet" href="rating.css">
  <style>
    .checked{
      color:orange;
    }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  </style>
  <body>
  <img src="" style="display: none">
       
    <?php 
        echo "<h1>$pname</h1><br>";
        echo "<img src=\"$pimage\"><br>";
    ?>

    <?php
    include 'purchase.php';
    include 'fetchReviews.php';
    ?>

<div style="text-align: center;">
<form>
<h2>All reviews for <?php echo $pname; ?></h2>

<?php include 'fetchRating.php'; ?>
<input type="button" value="Back" onclick="window.history.back()" />
</form></div>

<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://manisharigala.000webhostapp.com/dbfetchReviews.php");
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(["prod_id"=>$pid,"limit"=>false]));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$reviews = curl_exec($ch);
curl_close($ch);

echo $reviews;
?>

<?php
include('../footer.php');
?>
</body>
    </html>