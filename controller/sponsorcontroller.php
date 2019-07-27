<?php
      namespace controller;

      include("dao\pdo\sponsorDaoPdo.php");

      use model\Sponsor as Sponsor;
      use dao\pdo\SponsorDaoPdo as SponsorDaoPdo;

      class SponsorController
      {
        private $sponsorDAO;

        public function __construct()
        {
          $this->sponsorDAO = new SponsorDaoPdo();
        }

        public function GetAll()
        {
          return $this->sponsorDAO->GetAll();
        }
        public function GetSponsorByDNI($dni)
        {
          return $this->sponsorDAO->GetSponsorByDNI($dni);
        }

        public function addSponsor()
        {
            try
            {
                    require_once(VIEWS_PATH."newsponsor-admin.php");
            }
            catch(Exception $ex)
            {
                $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
                echo '<script type="text/javascript">confirm("'.$message.'");</script>';
                require_once(VIEWS_PATH."home.php");
            }

            }
            public function listSponsorsAdmin()
            {
              try
              {
               require_once(VIEWS_PATH."sponsor-admin.php");

              }
              catch(Exception $ex)
            {
              $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
              echo '<script type="text/javascript">confirm("'.$message.'");</script>';
              require_once(VIEWS_PATH."home.php");
            }
          }

            public function listSponsors()
            {
              try
              {
               require_once(VIEWS_PATH."about.php");

              }
              catch(Exception $ex)
            {
              $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
              echo '<script type="text/javascript">confirm("'.$message.'");</script>';
              require_once(VIEWS_PATH."home.php");
            }
          }

          public function Add($name, $description, $dni)
          {

              //lo de la imagen lo hago después, no viene por parametro
              try
              {
                  $sponsor = new Sponsor();
                  $sponsor->setName($name);
                  $sponsor->setDescription($description);
                  $sponsor->setDni($dni);
                  $sponsor->setImages($this->moveImage($sponsor->getDni()));

                  if($this->sponsorDAO->GetSponsorByDNI($sponsor->getDni()) == null)
                  {
                      $this->sponsorDAO->Add($sponsor);
                      $message = "Sponsor agregado con éxito";
                  }
                  else
                      $message = "Ya existe la persona que intenta ingresar";

                  $this->listSponsorsAdmin();
              }
              catch(Exception $ex)
              {
                  $message = 'Oops ! \n\n Hubo un problema al intentar agregar la persona.\n Consulte a su Administrador o vuelva a intentarlo.';
                  echo '<script type="text/javascript">confirm("'.$message.'");</script>';
                  require_once(VIEWS_PATH."home.php");
              }
          }

          public function moveImage($name){
                $arrayImagenes = array();
                $imageDirectory = VIEWS_PATH.'images/sponsors/';
                if(!file_exists($imageDirectory)){
                    mkdir($imageDirectory);
                }

                for ($i = 1; $i<=3 ; $i++ )
                {
                  $imgName = 'image'.$i;
                  $file=null;
                  if($_FILES and $_FILES[$imgName]['size']>0){
                      if((isset($_FILES[$imgName])) && ($_FILES[$imgName]['name'] != '')){

                          $file = $imageDirectory . $name."-".$i . "." . $this->obtenerExtensionFichero($_FILES[$imgName]['name']);
                          move_uploaded_file($_FILES[$imgName]["tmp_name"], $file);
                          /*
                          if(!file_exists($file)){
                              move_uploaded_file($_FILES["image"]["tmp_name"], $file);
                          }
                          */
                          array_push($arrayImagenes,$file);

                      }
                  }

                }
                return $arrayImagenes;

            }

          public function Delete($dni)
            {
                try
                {
                    $this->sponsorDAO->LogicalDelete($dni);

                    $this->listSponsors();
                }
                catch(Exception $ex)
                {
                    $message = 'Oops ! \n\n Hubo un problema al intentar eliminar la persona.\n Consulte a su Administrador o vuelva a intentarlo.';
                    echo '<script type="text/javascript">confirm("'.$message.'");</script>';
                    require_once(VIEWS_PATH."home.php");
                  }
              }

              function obtenerExtensionFichero($str){
                          $temp = explode(".", $str);
                          return end($temp);
                      }


          public function ShowException(){
              try
              {
                  $message = "";

                  $this->sponsorDAO->ShowException();
              }
              catch(Exception $ex)
              {
                  $message = 'Oops ! \n\n Hubo un problema de tipo Exception.\n Consulte a su Administrador.';
                  echo '<script type="text/javascript">confirm("'.$message.'");</script>';
                  require_once(VIEWS_PATH."home.php");
              }
          }



        }





 ?>
