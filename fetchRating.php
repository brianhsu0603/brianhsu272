<div>
<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://manisharigala.000webhostapp.com/dbfetch.php");
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(["prod_id"=>$productNum]));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$rating = curl_exec($ch);
curl_close($ch);
if ($rating != 0){
    echo "Overall rating {$rating}/5 ";
    $scaled_score = round($rating * 2) / 2 * 20;
    echo "<span class=\"stars-container stars-{$scaled_score}\">★★★★★</span>";
}
else{
    echo "This product has not yet been rated";
}
?>
</div>
