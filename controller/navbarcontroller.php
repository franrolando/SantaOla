<?php

    namespace controller;

    use exceptions\WrongAtributeException;
    use dao\pdo\EventDaoPdo as EventDaoPdo;
    use dao\pdo\NavBarDaoPdo as NavBarDaoPdo;
    use dao\pdo\productDaoPdo as ProductDaoPdo;
    use dao\pdo\SponsorDaoPdo as SponsorDaoPdo;
    use model\Event as Event;
    use model\Product as Product;
    use model\Sponsor as Sponsor;
    use model\CarouselElement as CarouselElement;


    class NavBarController
    {
        private $navbarDAO;
        private $tableName = "carouselimages";
        private $productDAO;
        private $eventDAO;
        private $sponsorDAO;

        public function __construct()
        {
          $this->navbarDAO = new NavBarDaoPdo();
        }

        public function CarouselAdmin()
        {
          require_once(VIEWS_PATH."carousel-admin.php");
        }

        public function Contact()
        {
          require_once(VIEWS_PATH."contact.php");
        }

        public function Add($name,$type)
        {
            $this->navbarDAO->Add($this->moveImage($name),$type);
            require_once(VIEWS_PATH."carousel-admin.php");
        }

        public function AddImage()
        {
            require_once(VIEWS_PATH."NewCarousel-Image.php");
        }

        public function moveImage($name){
              $arrayImagenes = null;
              $imageDirectory = VIEWS_PATH.'images/carousel/';
              if(!file_exists($imageDirectory)){
                  mkdir($imageDirectory);
              }
                $imgName = 'image';
                $file=null;
                if($_FILES and $_FILES[$imgName]['size']>0){
                    if((isset($_FILES[$imgName])) && ($_FILES[$imgName]['name'] != '')){

                        $file = $imageDirectory . $name.".". $this->obtenerExtensionFichero($_FILES[$imgName]['name']);
                        move_uploaded_file($_FILES[$imgName]["tmp_name"], $file);
                        /*
                        if(!file_exists($file)){
                            move_uploaded_file($_FILES["image"]["tmp_name"], $file);
                        }
                        */
                        $arrayImagenes = $file;

                    }
                }
                return $arrayImagenes;

          }
          function obtenerExtensionFichero($str){
                      $temp = explode(".", $str);
                      return end($temp);
                  }

        public function GetAll()
        {
            return $this->navbarDAO->GetAll();
        }


        public function Delete($id)
        {
          $this->navbarDAO->LogicalDelete($id);
          $this->CarouselAdmin();
        }

        public function Logout()
        {
            session_destroy();

            $this->Index();
        }
    }
?>
