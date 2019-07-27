<?php

  include_once('header.php');

 ?>
<body style="background-color:#1d2e36">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <br><br><br><br><br><br><br><br><br><br>
  <section class="login-block">
      <div class="container">
  	<div class="row">
  		<div class="col-md-4 login-sec">
  		    <h2 class="text-center">SANTA OLA SURFSHOP</h2>
  		    <form class="login-form" action="<?php echo FRONT_ROOT;?>admin/login" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
      <input type="text" name="username" class="form-control border border-secondary" placeholder="">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
      <input type="password" name="password" class="form-control border border-secondary" placeholder="">
    </div>


      <div class="form-check">
      <label class="form-check-label">
        <small></small>
      </label>
      <button type="submit" class="btn btn-login float-right">Login</button>
    </div>

  </form>
  		</div>
  		<div class="col-md-8 banner-sec">

              <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <!--<img class="d-block img-fluid" src="https://www.oceanvagabond.com/wp-content/uploads/2018/05/surf-2.jpg" alt="First slide">-->
        <div class="carousel-caption d-none d-md-block">
          <div class="banner-text">
              <h2></h2>
              <p></p>
            </div>
    </div>
      </div>
              </div>

  		</div>
  	</div>
  </div>
  </section>


</body>


<?php

  include_once('footer-admin.php');

 ?>
