<?php
require "Config/Autoload.php";
require "Config/Request.php";
require "Config/Router.php";
require "Config/Config.php";
use Config\Autoload as Autoload;
use Config\Router 	as Router;
use Config\Request 	as Request;
  Autoload::Start();
  require_once("controller/productcontroller.php");
  require_once("dao/pdo/productdaopdo.php");
  use controller\productcontroller as ProductController;
  use dao\pdo\productdaopdo as ProductDaoPdo;

  $PDao = new ProductDaoPdo();
  $res = $PDao->GetProductsByFilter("None","All");
  foreach ($res as $prod) {
    echo $prod->getImage(0);
    echo $prod->getImage(2);
    echo $prod->getImage(1);
  }


 ?>
