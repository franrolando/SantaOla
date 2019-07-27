<?php

    include_once('nav-bar-admin.php');
 ?>


<br><br>

 <div class="container">

  <div class="title-box">
    <h1>Gestión de Eventos</h1>
    </div>

<br><br>

  <a class="btn btn-primary btn-nueva" href="<?php echo FRONT_ROOT;?>Event/addEvent" method="post"><b>+</b> Añadir Evento </a>

<br><br><br>

  <table class="table table-bordered grocery-crud-table table-hover">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($this->eventDAO->GetAll() as $event)
      {
                    ?><tr>
                          <td><?php echo $event->getTitle();?></td>
                          <td><?php echo $event->getDescription();?></td>
                          <td><?php echo $event->getDate();?></td>
                          <td><a type="button" class="btn btn-warning">Modificar</a>
                              <a href="<?php echo FRONT_ROOT;?>event/Delete/<?php echo $event->getEventId();?>" method="POST" class="btn btn-danger">Eliminar</a></td>
                      </tr>
<?php } ?>
    </tbody>
  </table>


</div>



<?php

  include_once('footer-admin.php');

 ?>
