<?php
  namespace dao\pdo;

  include("dao\connection.php");

  use model\Sponsor as Sponsor;
  use dao\Connection as Connection;
  use exceptions\SponsorNotFoundException as SponsorNotFoundException;

  /**
   *
   */
  class SponsorDaoPdo
  {

    private $connection;
    private $tableName = 'sponsors';

    public function Add(Sponsor $sponsor)
    {

      try{
        $query = "INSERT INTO ".$this->tableName." (dni,name,description,status,oncarousel) VALUES(:dni,:name,:description,:status,:oncarousel)";

        $parameters["dni"] = $sponsor->getDni();
        $parameters["name"] = $sponsor->getName();
        $parameters["description"] = $sponsor->getDescription();
        $parameters["status"] = "active";
        $parameters["oncarousel"] = 0;

        $this->connection = Connection::GetInstance();

        $this->connection->ExecuteNonQuery($query,$parameters);
        $this->AddArray($sponsor->getDni(), $sponsor->getImages());
      //  $this->AddArray($sponsor->getDni, $sponsor->getImages);
      }catch(Exception $e){
        throw $e;
      }
    }

    public function AddArray($idarray, $array = array())
    {
      $i = 1;
      foreach ($array as $link) {
        // code...
        try{
          $query = "INSERT INTO ".IMAGESTABLE." (imgid,image,status) VALUES(:imgid,:image,:status)";

          $parameters["imgid"] = $idarray;
          $parameters["image"] = $link;
          $parameters["status"] = "active";

          $this->connection->ExecuteNonQuery($query,$parameters);
          $i++;
        }catch(Exception $e){
          throw $e;
        }
      }
    }

    public function GetArray($dni)
    {
        $arrayImg = array();
        $query = "SELECT image FROM images WHERE imgid = :dni";
        $parameters["dni"] = $dni;
        $this->connection = Connection::GetInstance();
        $res = $this->connection->Execute($query,$parameters);
        foreach ($res as $row) {
          // code...
          array_push($arrayImg,$row["image"]);
        }
        return $arrayImg;
    }

    public function GetAll()
    {
      try {
        $sponsorArray = array();
        $query = "SELECT * FROM ".$this->tableName." WHERE status = :status";
        $parameters["status"] = "active";
        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query,$parameters);
        foreach ($result as $row) {
          // code...
            $sponsor = new Sponsor();
            $sponsor->setDni($row["dni"]);
            $sponsor->setDescription($row["description"]);
            $sponsor->setName($row["name"]);
            $sponsor->setImages($this->GetArray($sponsor->getDni()));
            array_push($sponsorArray, $sponsor);
        }
        return $sponsorArray;
      } catch (Exception $e) {
      }

    }

    public function GetSponsorByDNI($dni)
    {
      try{
        $sponsorR = null;
        $query = "SELECT * FROM ".$this->tableName." WHERE (dni = :dni) AND (status = :status)";
        $parameters["dni"] = $dni;
        $parameters["status"] = "active";
        $this->connection = Connection::GetInstance();
        $resultSet = $this->connection->Execute($query,$parameters);
        foreach ($resultSet as $row) {
          // code...
          $sponsorR = new Sponsor();
          $sponsorR->setDni($row["dni"]);
          $sponsorR->setDescription($row["description"]);
          $sponsorR->setName($row["name"]);
        }
        return $sponsorR;
      }catch (Exception $e){

      }
    }

// A cambiar por una columna "isActive" a la cual en esta función la seteamos en 0;
    public function LogicalDelete($dni)
    {
      try{
        $query = "UPDATE ".$this->tableName." SET Status = 'inactive' WHERE idevent = :idevent";
        $parameters["idevent"] = $dni;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }
  }

?>
