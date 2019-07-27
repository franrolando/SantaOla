<?php

    include_once('nav-bar-admin.php');
 ?>


<br><br>

 <div class="container">

  <div class="title-box">
    <h1>Gestión de Imagenes de Productos Nuevos</h1>
    </div>

<br><br>

<h1>Productos Nuevos Actuales</h1><br><br>
<table class="table table-bordered grocery-crud-table table-hover">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Tipo de producto</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($this->GetAllNews() as $product)
          {
                  ?><tr>
                        <td><?php echo $product->getProductcode()?></td>
                        <td><?php echo $product->getName()?></td>
                        <td><?php echo $product->getDescription()?></td>
                        <td><?php echo $product->getPrice()?></td>
                        <td><?php echo $product->getProdType()?></td>
                        <td><a href="<?php echo FRONT_ROOT;?>product/SetNotNew/<?php echo $product->getProductcode(); ?>" method="post" type="button" class="btn btn-danger">Eliminar</a></td>
                    </tr><?php
          }
   ?>
  </tbody>
</table> <br><br>

<h1>Productos</h1><br><br>
<table class="table table-bordered grocery-crud-table table-hover">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Tipo de producto</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($this->GetAllNotNews() as $product)
          {
                  ?><tr>
                        <td><?php echo $product->getProductcode()?></td>
                        <td><?php echo $product->getName()?></td>
                        <td><?php echo $product->getDescription()?></td>
                        <td><?php echo $product->getPrice()?></td>
                        <td><?php echo $product->getProdType()?></td>
                        <td><a href="<?php echo FRONT_ROOT;?>product/SetNew/<?php echo $product->getProductcode(); ?>" method="post" type="button" class="btn btn-success">Agregar</a></td>
                    </tr><?php
          }
   ?>
  </tbody>
</table>



</div>



<?php

  include_once('footer-admin.php');

 ?>
