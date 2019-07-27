


<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/select2/select2.min.js"></script>
<script type="text/javascript">
  $(".selection-1").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
  });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo FRONT_ROOT . VIEWS_PATH; ?>vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
  $('.block2-btn-addcart').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
    $(this).on('click', function(){
      swal(nameProduct, "is added to cart !", "success");
    });
  });

  $('.block2-btn-addwishlist').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
    $(this).on('click', function(){
      swal(nameProduct, "is added to wishlist !", "success");
    });
  });
</script>

<!--===============================================================================================-->
<script src="<?php echo JS_PATH;?>main.js"></script>
</body>
</html>
