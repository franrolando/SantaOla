<?php

    include_once('nav-bar-admin.php');
 ?>

<br><br>

 <div class="container">

  <div class="title-box">
    <h1>Gestión de Raiders</h1>
    </div>

<br><br>

  <a class="btn btn-primary btn-nueva" href="<?php echo FRONT_ROOT;?>Sponsor/AddSponsor" method="post"><b>+</b> Añadir Raider </a>

<br><br><br>

  <table class="table table-bordered grocery-crud-table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Dni</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach ($this->sponsorDAO->GetAll() as $sponsor)
        {
                      ?><tr>
                        <td><?php echo $sponsor->getName()?></td>
                        <td><?php echo $sponsor->getDescription()?></td>
                        <td><?php echo $sponsor->getDni()?></td>
                        <td><a type="button" class="btn btn-warning">Modificar</a>
                            <a href="<?php echo FRONT_ROOT;?>sponsor/Delete/<?php echo $sponsor->getDni();?>" method="POST" class="btn btn-danger">Eliminar</a></td> <!-- Agregar boton eliminar y modificar-->
                        </tr><?php

                      }
                         ?>
    </tbody>
  </table>


</div>


<?php

  include_once('footer-admin.php');

 ?>
