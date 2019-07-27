<?php

/**
 * Mostrar errores de PHP
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/**
 * Archivos necesarios de inicio
 */
require "Config/Autoload.php";
require "Config/Request.php";
require "Config/Router.php";
require "Config/Config.php";


/**
 * Alias
 */
use Config\Autoload as Autoload;
use Config\Router 	as Router;
use Config\Request 	as Request;



Autoload::Start();
if (!isset($_SESSION))
  {
    session_start();
  }

  //require (VIEWS_PATH."nav-bar-admin.php");
  Router::direccionar(new Request(1));
  //require (VIEWS_PATH."footer-admin.php");
