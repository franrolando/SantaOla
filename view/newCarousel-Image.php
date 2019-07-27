<?php

    include_once('nav-bar-admin.php');
 ?>

 <div class="wrapper row3" >
  <main class="container" style="width: 90%;">
    <!-- main body -->
    <div class="content" >
      <div id="comments" style="align-items:center;">
        <br>
        <br>
        <h2>Ingresar Artículo</h2>
        <br>
        <br>
        <form action="<?php echo FRONT_ROOT;?>NavBar/Add" method="post" enctype="multipart/form-data" style="background-color: #EAEDED;padding: 2rem !important;">
          <table>
            <thead>
              <tr>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de la imagen</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Ingrese el codigo del producto">
                  <small id="emailHelp" class="form-text text-muted">Ejemplo: Zapatiilas en oferta</small>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Sexo</label>
                  <div class="form-check" >
                  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="Hombre" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Producto
                  </label>
                </div>
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="Mujer">
                  <label class="form-check-label" for="exampleRadios2">
                    Evento
                  </label>
                </div>
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="type" id="exampleRadios3" value="Unisex">
                  <label class="form-check-label" for="exampleRadios3">
                    Raider
                  </label>
                </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Imagenes</label>
                  <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" class="form-control">
                </div>

            <!--    <button type="submit" class="btn btn-primary">Submit</button> -->
              </tr>
            </thead>
            <tbody align="center">
              <tr>
                <td>
                  <!--<input type="text" name="Name" id="" value="" size="22" required>-->
            <!--      <input type="text" name="ArtistName" value="" required><br>
                </td>
                <td>
                    <input type="text" name="ArtistDescription" value="" required><br>
                </td>
                <td>
                    <input type="text" name="ArtistGender" value=""><br>
                </td>
                <td>
                    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"><br>
                </td>
              </tr>
              !-->
            </tbody>
          </table>
          <div>
            <input type="submit" class="btn" value="Agregar" style="background-color:#DC8E47;color:white;"/>
          </div>
        </form>
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<?php

    include_once('footer-admin.php');
 ?>
<?php

  include_once('footer-admin.php');

 ?>
