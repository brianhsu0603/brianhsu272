<div>
<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://manisharigala.000webhostapp.com/dbfetchReviews.php");
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(["prod_id"=>$productNum,"limit"=>true]));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$reviews = curl_exec($ch);
curl_close($ch);

echo $reviews;

$ch1 = curl_init();
curl_setopt($ch1,CURLOPT_URL,"http://manisharigala.000webhostapp.com/dbfetchNumReviews.php");
curl_setopt($ch1,CURLOPT_POST,1);
curl_setopt($ch1,CURLOPT_POSTFIELDS,http_build_query(["prod_id"=>$productNum]));
curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
$numReviews = curl_exec($ch1);
curl_close($ch1);

if ($numReviews > 3){
    echo "<div style=\"text-align:center\"><a href=\"allReviews.php?pid={$productNum}&pname=$pname&pimage=$pimage\">See More Reviews</a></div>";
}
?>
</div>

<!-- ratings/review box -->
<div align= center>
<h3 id="temp">Rate me below</h3>
<span id = "s_1" class="fa fa-star" onclick="updateStars(1)"></span>
<span id = "s_2" class="fa fa-star" onclick="updateStars(2)"></span>
<span id = "s_3" class="fa fa-star" onclick="updateStars(3)"></span>
<span id = "s_4" class="fa fa-star" onclick="updateStars(4)"></span>
<span id = "s_5" class="fa fa-star" onclick="updateStars(5)"></span>

<br>
    <h4>Type in your comments below</h4>

<form>
    <div>
    <textarea id="words" rows="10" cols="30" placeholder="What did you like or dislike?" 
    style="margin: 0px;height: 90px;width: 506px;font-size: medium;font-style: oblique; resize:none" spellcheck="false"></textarea>
    </div>
    
    <div>
    <button type="button" class="abutton" id="commentAction" style="
    font-size: medium;
    padding: 6px 10px;"> Submit </button>
    <div>
</form>
</div>    
<h2 id="rtemp"></h2>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var crating = 0;
    function updateStars(scount){
        for(i = 1; i <= 5; i++){
            var cname = "s"+"_"+i;
            if(i <= scount) {
                document.getElementById(cname).className = "fa fa-star checked";           
            }else {
                document.getElementById(cname).className = "fa fa-star";       
            }
        }
        crating = scount;
    }
    
    function sendRating() {
        reviewT = $('textarea#words').val();
        $.post("http://manisharigala.000webhostapp.com/add_feedback.php", 
          {token : "<?php echo ($_COOKIE['userToken']);?>",  
          review: reviewT, rating: crating, 
          prod_id : "<?php echo ($productNum);?>"}, 
          function(result){
            $("#rtemp").html(result);
        });
    }

    

    $( "#commentAction" ).on( "click", function() {
      sendRating();
    });
    </script>
