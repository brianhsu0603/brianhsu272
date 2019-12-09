<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">

  function addToCart() {
        $.post("http://manisharigala.000webhostapp.com/add_to_cart.php", 
          {token : "<?php echo ($_COOKIE['userToken']);?>",  
          prod_id : "<?php echo ($productNum);?>"}, 
          function(result){
            $("#rtemp").html(result);
        });
    }

    $("#cart_button").on("click", function() {
      addToCart();
    });
</script>