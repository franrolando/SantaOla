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
        <h2>Ingresar Evento</h2>
        <br>
        <br>
        <form action="<?php echo FRONT_ROOT;?>Event/Add" method="post" enctype="multipart/form-data" style="background-color: #EAEDED;padding: 2rem !important;">
          <table>
            <thead>
              <tr>
                <form action=>
                <div class="form-group">
                  <label for="exampleInputPassword1">Titulo</label>
                  <input type="text" class="form-control" name="nombre" id="exampleInputPassword1" placeholder="Ingrese el Titulo del evento">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <input type="text" class="form-control" name="desc" id="exampleInputPassword1" placeholder="Ingrese la descripcion del Evento">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha</label>
                  <input type="date" class="form-control" name="precio" id="exampleInputPassword1" placeholder="Ingrese la fecha del evento">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Imagenes</label>
                  <input type="file" name="image1" id="image" accept=".jpg, .jpeg, .png" class="form-control">
                  <input type="file" name="image2" id="image" accept=".jpg, .jpeg, .png" class="form-control">
                  <input type="file" name="image3" id="image" accept=".jpg, .jpeg, .png" class="form-control">
                </div>

            <!--    <button type="submit" class="btn btn-primary">Submit</button> -->
              </form>
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
