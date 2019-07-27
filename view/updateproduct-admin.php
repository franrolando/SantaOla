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
        <form action="<?php echo FRONT_ROOT;?>Product/Add" method="post" enctype="multipart/form-data" style="background-color: #EAEDED;padding: 2rem !important;">
          <table>
            <thead>
              <tr>
                <form action=>
                <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo $this->toUpdate->getProductcode(); ?></label>
                  <input type="text" class="form-control" name="codigo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el codigo del producto">
                  <small id="emailHelp" class="form-text text-muted">Ejemplo: COD-001</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo $this->toUpdate->getName(); ?></label>
                  <input type="text" class="form-control" name="nombre" id="exampleInputPassword1" placeholder="Ingrese el nombre del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo $this->toUpdate->getDescription(); ?></label>
                  <input type="text" class="form-control" name="desc" id="exampleInputPassword2" placeholder="Ingrese la descripcion del producto">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo $this->toUpdate->getPrice(); ?></label>
                  <input type="text" class="form-control" name="precio" id="exampleInputPassword3" placeholder="Ingrese el precio del producto">
                </div>
                <div class="form-group">
                  <select class="form-control" name="category">
                  <option selected>Seleccione Categoría</option>
                  <option value="Hombre" name="category">Hombre</option>
                  <option value="Mujer" name="category">Mujer</option>
                  <option value="Adulto" name="category">Adulto</option>
                  <option value="Ninio" name="category">Niño</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sexo</label>
                  <div class="form-check" >
                  <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="Hombre" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Hombre
                  </label>
                </div>
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="Mujer">
                  <label class="form-check-label" for="exampleRadios2">
                    Mujer
                  </label>
                </div>
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="sexo" id="exampleRadios3" value="Unisex">
                  <label class="form-check-label" for="exampleRadios3">
                    Unisex
                  </label>
                </div>
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
