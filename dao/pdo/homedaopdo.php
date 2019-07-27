<?php
  namespace dao\pdo;

  use model\Product as Product;
  use dao\Connection as Connection;
  use model\carouselElement as carouselElement;
  /**
   *
   */
  class HomeDaoPdo
  {

    private $connection;
    private $tableName = 'products';

    public function GetAll()
    {
        $productArray = array();
        $query = "SELECT * FROM ".$this->tableName." WHERE status = :status AND isnew = :isnew";
        $parameters["status"] = "active";
        $parameters["isnew"] = 1;
        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query,$parameters);
        foreach ($result as $row) {
          // code...
            $product = new Product();
            $product->setName($row["name"]);
            $product->setDescription($row["description"]);
            $product->setPrice($row["price"]);
            $product->setProductcode($row["idproduct"]);
            $product->setProdType($row["category"]);
            $product->setImages($this->GetArray($product->getProductcode()));
            array_push($productArray, $product);
      }
      return $productArray;
    }

    public function GetAllCarousel()
    {
        $carouselArray = array();
        $query = "SELECT * FROM carouselimages";
        $this->connection = Connection::GetInstance();
        $result = $this->connection->Execute($query);
        foreach ($result as $row) {
          // code...
            $product = new carouselElement();
            $product->setName($row["name"]);
            $product->setIdelement($row["id"]);
            $product->setType($row["type"]);
            array_push($carouselArray, $product);
      }
      return $carouselArray;
    }

    public function GetArray($idproduct)
    {
        $arrayImg = array();
        $query = "SELECT image FROM images WHERE imgid = :idproduct";
        $parameters["idproduct"] = $idproduct;
        $this->connection = Connection::GetInstance();
        $res = $this->connection->Execute($query,$parameters);
        foreach ($res as $row) {
          // code...
          array_push($arrayImg,$row["image"]);
        }
        return $arrayImg;
    }

    public function LogicalDelete($idevent)
    {
      try{
        $query = "UPDATE ".$this->tableName." SET Status = 'inactive' WHERE idevent = :idevent";
        $parameters["idevent"] = $idevent;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }
  }

?>
