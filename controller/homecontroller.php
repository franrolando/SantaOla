<?php namespace controller;

use controller\ProductController as ProductController;
use controller\SponsorController as SponsorController;
use controller\EventController as EventController;
use dao\pdo\HomeDaoPdo;
use model\Product as Product;

    class HomeController
    {

        private $homeDAO;

        public function __construct()
        {
          $this->homeDAO = new HomeDaoPdo();
        }

        public function Index()
        {
            require_once(VIEWS_PATH . "home.php");
        }

        public function Logout()
        {
            session_destroy();

            $this->Index();
        }

        public function GetAllNews()
        {
          return $this->homeDAO->GetAll();
        }

        public function getCarouselImages()
        {
          $array = array();
          $array = $this->homeDAO->GetAllCarousel();
          return $array;
        }

        public function Redirect($type)
        {
          try {
            if ($type == "producto")
              ProductController::listAll();
            else {
              if ($type == "raider")
                require_once(VIEWS_PATH . "about.php");
              else {
                if ($type == "evento")
                  require_once(VIEWS_PATH . "blog.php");
              }
            }

          } catch (\Exception $e) {
            $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
            echo '<script type="text/javascript">confirm("'.$message.'");</script>';
            require_once(VIEWS_PATH."home.php");

          }


        }
    }
?>
