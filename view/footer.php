<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" style="background-color:#063542">
  <div class="flex-w p-b-90">
    <div class="col-2">

    </div>
    <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
      <h4 class="s-text12 p-b-30">
        Mantente en contacto
      </h4>

      <div>
        <p class="s-text7 w-size27">
          Alguna consulta? Acercate a Olavarría 2992 o llamanos al 0223 451-1771
        </p>

        <div class="flex-m p-t-30">
          <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
          <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
    <!--			<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>  -->
    <!--			<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>  -->
          <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
        </div>
      </div>
    </div>

    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Categorías
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Hombre
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Mujer
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Tablas
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Artículos
          </a>
        </li>
      </ul>
    </div>

<!--		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Links
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Search
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            About Us
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Contact Us
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Returns
          </a>
        </li>
      </ul>
    </div>			-->

    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
      <h4 class="s-text12 p-b-30">
        Secciones
      </h4>

      <ul>
        <li class="p-b-9">
          <a href="#" class="s-text7">
            Eventos
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Raiders
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Artículos
          </a>
        </li>

        <li class="p-b-9">
          <a href="#" class="s-text7">
            Tablas
          </a>
        </li>
      </ul>
    </div>

<!--		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
      <h4 class="s-text12 p-b-30">
        Newsletter
      </h4>

      <form>
        <div class="effect1 w-size9">
          <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
          <span class="effect1-line"></span>
        </div>

        <div class="w-size2 p-t-20">

          <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
            Subscribe
          </button>
        </div>

      </form>
    </div>  -->
    <div class="col-2">

    </div>
  </div>

  <div class="t-center p-l-15 p-r-15">
    <a href="#">
      <img class="h-size2" src="<?php echo IMG_PATH; ?>icons/paypal.png" alt="IMG-PAYPAL">
    </a>

    <a href="#">
      <img class="h-size2" src="<?php echo IMG_PATH; ?>icons/visa.png" alt="IMG-VISA">
    </a>

    <a href="#">
      <img class="h-size2" src="<?php echo IMG_PATH; ?>icons/mastercard.png" alt="IMG-MASTERCARD">
    </a>

    <a href="#">
      <img class="h-size2" src="<?php echo IMG_PATH; ?>icons/express.png" alt="IMG-EXPRESS">
    </a>

    <a href="#">
      <img class="h-size2" src="<?php echo IMG_PATH; ?>icons/discover.png" alt="IMG-DISCOVER">
    </a>

    <div class="t-center s-text8 p-t-20" style="color:#e5c60a; font-weight:bold">
      SantaOla Surfshop © 2019
    </div>
  </div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
  </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



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
