<?php

    include_once('nav-bar-admin.php');
 ?>


<br><br>

 <div class="container">

  <div class="title-box">
    <h1>Gestión de Imagenes del Carousel</h1>
    </div>

<br><br>

  <a class="btn btn-primary btn-nueva" href="<?php echo FRONT_ROOT;?>navbar/addImage" method="post"><b>+</b> Añadir Imagen </a>

<br><br><br>
  <div>
  <h1>Imagenes Actuales</h1><br><br>
  <table class="table table-bordered grocery-crud-table table-hover">
    <thead>
      <tr>
        <th>Imagen</th>
        <th>Quitar</th>
      </tr>
    </thead>
    <?php foreach ($this->getAll() as $element) { ?>
    <tbody>
      <td><img src="<?php echo FRONT_ROOT.$element->getName(); ?>" height="400pp" width="400pp"></td>
      <td><a href="<?php echo FRONT_ROOT;?>NavBar/Delete/<?php echo $element->getIdelement();?>" method="POST" class="btn btn-danger">Eliminar</a></td>
    </tbody>
    <?php } ?>
  </table>
</div><br><br>

</div>




<?php

  include_once('footer-admin.php');

 ?>
