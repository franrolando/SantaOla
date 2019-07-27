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

    /*require_once(VIEWS_PATH."header.php");*/

    Autoload::Start();
    if(!isset($_SESSION))
    {
      session_start();
    }

    Router::direccionar(new Request(0));
    //Router::Route(new Request());

    /*require_once(VIEWS_PATH."footer.php");*/
