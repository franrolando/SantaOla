<?php
  namespace controller;

  include("dao\pdo\\eventDaoPdo.php");

  use exceptions\WrongAtributeException;
  use dao\pdo\EventDaoPdo;
  use model\Event as Event;

  class EventController
  {

    private $eventDAO;

    function __construct()
    {
      $this->eventDAO = new EventDaoPdo();
    }

    public function addEvent($message = "")
    {
        try
        {
                require_once(VIEWS_PATH."newevent-admin.php");
        }
        catch(Exception $ex)
        {
            $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
            echo '<script type="text/javascript">confirm("'.$message.'");</script>';
            require_once(VIEWS_PATH."home.php");
        }

    }

    public function listEventsAdmin()
    {
      try
      {
        require_once(VIEWS_PATH."event-admin.php");
      } catch(Exception $ex)  {
          $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
          echo '<script type="text/javascript">confirm("'.$message.'");</script>';
          require_once(VIEWS_PATH."home.php");
        }
    }

    public function listEvents()
    {
      try
      {
        require_once(VIEWS_PATH."blog.php");

      } catch(Exception $ex)  {
          $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
          echo '<script type="text/javascript">confirm("'.$message.'");</script>';
          require_once(VIEWS_PATH."home.php");
        }
    }

    public function moveImage($name){
          $arrayImagenes = array();
          $imageDirectory = VIEWS_PATH.'images/events/';
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

      public function GetAll()
      {
        return $this->eventDAO->GetAll() ;
      }

      public function Add($title, $description, $date)
      {

          //lo de la imagen lo hago después, no viene por parametro
          try
          {
              $event = new Event();
              $event->setTitle($title);
              $event->setDescription($description);
              $event->setDate($date);
              $idevent = $this->eventDAO->GetIdEvent($event->getTitle(),$event->getDescription());
              if($this->eventDAO->GetEventById($idevent) == null)
              {
                  $this->eventDAO->Add($event);
                  $idevent = $this->eventDAO->GetIdEvent($title,$description);
                  $event->setImages($this->moveImage($idevent));
                  $this->eventDAO->AddArray($idevent, $event->getImages());
                  $message = "Evento agregado con éxito";
              }
              else
                  $message = "Ya existe el evento que intenta ingresar";

              $this->listEventsAdmin();
          }
          catch(Exception $ex)
          {
              $message = 'Oops ! \n\n Hubo un problema al intentar agregar el evento.\n Consulte a su Administrador o vuelva a intentarlo.';
              echo '<script type="text/javascript">confirm("'.$message.'");</script>';
              require_once(VIEWS_PATH."home.php");
          }
      }


      public function Delete($eventId)
        {
            try
            {
                $this->eventDAO->LogicalDelete($eventId);

                $this->listEventsAdmin();
            }
            catch(Exception $ex)
            {
                $message = 'Oops ! \n\n Hubo un problema al intentar eliminar el evento.\n Consulte a su Administrador o vuelva a intentarlo.';
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
