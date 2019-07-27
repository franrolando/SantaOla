<?php
  namespace controller;


  use exceptions\WrongAtributeException;
  use dao\pdo\productDaoPdo;
  use model\Product as Product;

  class ProductController
  {

    private $productDAO;
    private $listaFilteredProduct = array();
    private $toUpdate = null;

    function __construct()
    {
      $this->productDAO = new ProductDaoPdo();
    }

    public function addProduct()
    {
        try
        {
                require_once(VIEWS_PATH."newproduct-admin.php");

        }
        catch(Exception $ex)
        {
            $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
            echo '<script type="text/javascript">confirm("'.$message.'");</script>';
            require_once(VIEWS_PATH."admin.php");
        }
      }

        public function NewProducts()
        {
          require_once(VIEWS_PATH."newproducts-admin.php");
        }

        public function updateProduct($product)
        {
            try
            {
                    $this->toUpdate = $this->productDAO->GetByProductCode($product);
                    $this->Delete($product);
                    require_once(VIEWS_PATH."updateproduct-admin.php");

            }
            catch(Exception $ex)
            {
                $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
                echo '<script type="text/javascript">confirm("'.$message.'");</script>';
                require_once(VIEWS_PATH."admin.php");
            }

        }

        public function listProducts()
        {
          require_once(VIEWS_PATH . "product.php");
        }

        public function listProductsAdmin()
        {
          try
          {
            require_once(VIEWS_PATH."product-admin.php");
          }
          catch(Exception $ex)
        {
          $message = 'Oops ! \n\n Hubo un problema al intentar mostrar la Pagina.\n Consulte a su Administrador o vuelva a intentarlo.';
          echo '<script type="text/javascript">confirm("'.$message.'");</script>';
          require_once("home.php");
        }
      }
      public function listProductsByFilter($filter)
      {
          $this->listaFiltredProduct = $this->productDAO->Filter($filter,null);
          require_once(VIEWS_PATH . "product.php");
      }

      public function listProductsByFilter2()
      {
        $filter = array();
        $category = array();
        if (isset($_POST['category']))
          $category = $_POST['category'];
        if (isset($_POST['filtros']))
          $filter = $_POST['filtros'];
        $this->listaFilteredProduct = $this->productDAO->Filter($filter,$category);
          require_once(VIEWS_PATH . "product.php");
      }

      public function GetAllNews()
      {
        return $this->productDAO->GetNews();
      }

      public function GetAllNotNews()
      {
        return $this->productDAO->GetNotNews();
      }

      public function setNew($idproduct)
      {
        $this->productDAO->setNew($idproduct);
        $this->NewProducts();
      }

      public function setNotNew($idproduct)
      {
        $this->productDAO->SetNotNew($idproduct);
        $this->NewProducts();
      }

      public function listAll()
      {
        $this->listaFilteredProduct = $this->productDAO->GetAll();
        require_once(VIEWS_PATH . "product.php");
      }

      public function GetAll()
      {
        return $this->productDAO->GetAll();
      }

      public function listCat($category)
      {
        $this->listaFilteredProduct = $this->productDAO->Filter(array(),$category);
        require_once(VIEWS_PATH . "product.php");
      }

      public function Add($productcode, $name, $description, $price ,$prodType ,$sex)
      {

          //lo de la imagen lo hago después, no viene por parametro
          try
          {
              $product = new Product();
              $product->setName($name);
              $product->setDescription($description);
              $product->setPrice($price);
              $product->setProductcode($productcode);
              $product->setSex($sex);
              $product->setProdType($prodType);
              $product->setImages($this->moveImage($name));
              if($this->productDAO->GetByProductCode($product->getProductcode()) == null)
              {
                  $this->productDAO->Add($product);
                  $message = "Producto agregado con éxito";
              }
              else
                  $message = "Ya existe el producto que intenta ingresar";

              $this->listProductsAdmin();
          }
          catch(Exception $ex)
          {
              $message = 'Oops ! \n\n Hubo un problema al intentar agregar el producto.\n Consulte a su Administrador o vuelva a intentarlo.';
              echo '<script type="text/javascript">confirm("'.$message.'");</script>';
              require_once(VIEWS_PATH."home.php");
          }
      }



      public function moveImage($name){
            $arrayImagenes = array();
            $imageDirectory = VIEWS_PATH.'images/products/';
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


      public function Delete($productCode)
        {
            try
            {
                $this->productDAO->LogicalDelete($productCode);
                $this->listProductsAdmin();
            }
            catch(Exception $ex)
            {
                $message = 'Oops ! \n\n Hubo un problema al intentar eliminar el producto.\n Consulte a su Administrador o vuelva a intentarlo.';
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



    /**
     * Get the value of Product
     *
     * @return mixed
     */
    public function getProductDAO()
    {
        return $this->productDAO;
    }

    /**
     * Get the value of Lista Filtred Product
     *
     * @return mixed
     */
    public function getListaFiltredProduct()
    {
        return $this->listaFiltredProduct;
    }

}
