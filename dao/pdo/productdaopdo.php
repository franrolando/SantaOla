<?php
  namespace dao\pdo;

  include("dao\Connection.php");

  use model\Product as Product;
  use dao\Connection as Connection;
  use exceptions\ProductNotFoundException as ProductNotFoundException;

  /**
   *
   */
  class ProductDaoPdo
  {

    private $connection;
    private $tableName = 'products';


    public function Add(Product $product)
    {

      try{
        $query = "INSERT INTO ".$this->tableName." (idproduct,name,description,price,status,oncarousel,sex,category,isNew) VALUES(:idproduct,:name,:description,:price,:status,:oncarousel,:sex,:category,:isNew)";

        $parameters["idproduct"] = $product->getProductcode();
        $parameters["name"] = $product->getName();
        $parameters["description"] = $product->getDescription();
        $parameters["price"] = $product->getPrice();
        $parameters["status"] = "active";
        $parameters["sex"] = $product->getSex();
        $parameters["category"] = $product->getProdType();
        $parameters["isNew"] = 0;
        $parameters["oncarousel"] = 0;

        $this->connection = Connection::GetInstance();

        $this->AddArray($product->getProductcode(),$product->getImages());
        $this->connection->ExecuteNonQuery($query,$parameters);
      }catch(Exception $e){
        throw $e;
      }
    }

    public function Filter($filter,$category)
    {
      $arrayProd = array();
      $parameters = array();
      $query = "SELECT * FROM ".$this->tableName;
      if (!empty($filter) || !empty($category))
        $query .= " WHERE";
      if (!empty($filter))
      {
        if (is_array($filter))
        {
          $i=1;
          foreach ($filter as $filtro) {
//            $filtro = strtolower($filtro);
            if ( $i < sizeof($filter))
            {
              $query .= " description LIKE '%".$filtro."%' AND";
            }
            else
            {
              $query .= " description LIKE '%".$filtro."%'";
            }
            $i++;
          }
        }else {
          $query .= " description LIKE '%".$filter."%'";
        }
      }
      if (!empty($category))
      {
        if (!empty($filter))
          $query .= " AND";
        if (is_array($category))
        {
          $i=1;
          foreach ($category as $cat) {
            if ( $i < sizeof($category))
            {
              $query .= " category LIKE '%".$cat."%' AND";
            }
            else
            {
              $query .= " category LIKE '%".$cat."%'";
            }
            $i++;
          }
        }else {
          $query .= " category LIKE '%".$category."%'";
        }
      }
      $this->connection = Connection::GetInstance();
      $res = $this->connection->Execute($query,$parameters);

      foreach ($res as $row) {
        // code...
        $product = new Product();
        $product->setProductcode($row["idproduct"]);
        $product->setName($row["name"]);
        $product->setPrice($row["price"]);
        $product->setImages($this->GetArray($product->getProductcode()));
        array_push($arrayProd,$product);
      }
      return $arrayProd;
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

    public function AddArray($idarray, $array = array())
    {
      $i = 0;
      foreach ($array as $link) {
        // code...
        try{
          $query = "INSERT INTO images (imgid,image,status) VALUES(:imgid,:image,:status)";
          $parameters["imgid"] = $idarray;
          $parameters["image"] = $link;
          $parameters["status"] = "active";

          $this->connection->ExecuteNonQuery($query,$parameters);
        }catch(Exception $e){
          throw $e;
        }
      }
    }

    public function GetAll()
    {
        $productArray = array();
        $query = "SELECT * FROM ".$this->tableName." WHERE status = :status";
        $parameters["status"] = "active";
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

    public function GetNews()
    {
      $productArray = array();
      $query = "SELECT * FROM ".$this->tableName." WHERE isnew = :isnew AND status = :status";
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
        //  $product->setImages($this->GetArray($product->getProductcode()));
          array_push($productArray, $product);
    }
    return $productArray;
    }

    public function GetNotNews()
    {
      $productArray = array();
      $query = "SELECT * FROM ".$this->tableName." WHERE isnew = :isnew AND status = :status";
      $parameters["status"] = "active";
      $parameters["isnew"] = 0;
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
        //  $product->setImages($this->GetArray($product->getProductcode()));
          array_push($productArray, $product);
    }
    return $productArray;
    }

    public function GetByProductCode($idproduct)
    {
      try{
        $productR = null;
        $query = "SELECT * FROM ".$this->tableName." WHERE (idproduct = :idproduct) AND (status = :status)";
        $parameters["idproduct"] = $idproduct;
        $parameters["status"] = "active";
        $this->connection = Connection::GetInstance();
        $resultSet = $this->connection->Execute($query,$parameters);
        foreach ($resultSet as $row) {
          // code...
          $productR = new Product();
          $productR->setName($row["name"]);
          $productR->setDescription($row["description"]);
          $productR->setPrice($row["price"]);
          $productR->setProductcode($row["idproduct"]);
        }
        return $productR;
      }catch (Exception $e){

      }
    }


    public function SetNew($idproduct)
    {
      try{
        $query = "UPDATE ".$this->tableName." SET isnew = :isnew WHERE idproduct = :idproduct";
        $parameters["idproduct"] = $idproduct;
        $parameters["isnew"] = 1;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }

    public function SetNotNew($idproduct)
    {
      try{
        $query = "UPDATE ".$this->tableName." SET isnew = :isnew WHERE idproduct = :idproduct";
        $parameters["idproduct"] = $idproduct;
        $parameters["isnew"] = 0;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }

    public function LogicalDelete($idproduct)
    {
      try{
        $query = "UPDATE ".$this->tableName." SET status = 'inactive' WHERE idproduct = :idproduct";
        $parameters["idproduct"] = $idproduct;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
      } catch (Exception $e){

      }
    }
  }

?>
