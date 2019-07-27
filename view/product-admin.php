<?php

    include_once('nav-bar-admin.php');
 ?>


<br><br>

 <div class="container">

  <div class="title-box">
    <h1>Gestión de Artículos</h1>
    </div>

<br><br>

  <a class="btn btn-primary btn-nueva" href="<?php echo FRONT_ROOT;?>product/addProduct" method="post"><b>+</b> Añadir Artículo </a>

<br><br><br>

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
    <?php  foreach ($this->productDAO->GetAll() as $product)
            {
                    ?><tr>
                          <td><?php echo $product->getProductcode()?></td>
                          <td><?php echo $product->getName()?></td>
                          <td><?php echo $product->getDescription()?></td>
                          <td><?php echo $product->getPrice()?></td>
                          <td><?php echo $product->getProdType()?></td>
                          <td><a href="<?php echo FRONT_ROOT;?>product/updateProduct/<?php echo $product->getProductcode();?>" type="button" class="btn btn-warning">Modificar</a>
                              <a href="<?php echo FRONT_ROOT;?>product/Delete/<?php echo $product->getProductcode();?>" method="POST" class="btn btn-danger">Eliminar</a></td> <!-- Agregar boton eliminar y modificar-->
                      </tr><?php
            }
     ?>
    </tbody>
  </table>


</div>



<?php

  include_once('footer-admin.php');

 ?>
