<?php
  namespace dao\pdo;
  include("dao\Connection.php");

  use dao\Connection as Connection;
  use model\Event as Event;
  use model\Product as Product;
  use model\CarouselElement as CarouselElement;
  use model\Sponsor as Sponsor;

  /**
   *
   */
  class NavBarDaoPdo
  {

    private $connection;
    private $tableName = 'carouselimages';

    public function __construct()
    {

    }

    public function GetById($id)
    {
      try {
        $element = null;
        $query = "SELECT * FROM ".$this->tableName." WHERE id = :id";
        $parameters["id"] = $id;
        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query,$parameters);
        foreach ($result as $row) {
          // code...
          $element = new CarouselElement();
          $element->setIdelement($row["id"]);
          $element->setName($row["name"]);
          $element->setType($row["type"]);
        }
        return $element;
      } catch (Exception $e) {
      }
    }

    public function Add($name,$type)
    {
        if ($this->GetById($name) == null)
        {
          try{
            $query = "INSERT INTO ".$this->tableName." (name,type) VALUES(:name,:type)";
            $parameters["name"] = $name;
            $parameters["type"] = $type;
            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query,$parameters);
          }catch(Exception $e){
            throw $e;
          }
        }
    }


    public function GetAll()
    {
      try {
        $carouselArray = array();
        $query = "SELECT * FROM ".$this->tableName;
        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query);
        foreach ($result as $row) {
          // code...
            $element = new CarouselElement();
            $element->setIdelement($row["id"]);
            $element->setName($row["name"]);
            $element->setType($row["type"]);
            array_push($carouselArray, $element);
        }
        return $carouselArray;
      } catch (Exception $e) {
      }

    }

    public function LogicalDelete($idelement)
    {
      try{
        $query = "DELETE FROM ".$this->tableName." WHERE id = :idElement";
        $parameters["idElement"] = $idelement;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }

  }

?>
