

<?php
$pid = $_GET['pid'];
$pageName= $pid;
$pageTitle="Reviews for {$pid}";
include('../header.php');
?>

<div style="text-align: center;"><form>
<h2>All reviews for SERVICE NUMBER <?php echo $pid; ?></h2>

<?php include 'fetchRating.php'; ?>

<img src="http://manisharigala.000webhostapp.com/trackItem.php?num=<?php echo $productNum;?>" style="display: none">
<!--<img src="/images/<?php echo $image; ?>" height=<?php echo $w; ?> width=<?php echo $h; ?>><br> -->
<input type="button" value="Back" onclick="window.location.href='../products.php'" />
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
