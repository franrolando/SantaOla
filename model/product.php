<?php
    namespace model;

      class Product
      {

        private $name;
        private $description;
        private $price;
        private $productcode;
        private $sex;
        private $prodType;
        private $images = array();

        public function __construct()
        {

        }

        public function getType()
        {
          return "product";
        }
    public function getImage($i)
    {
        return $this->images[$i];
    }
    public function toString()
    {
      return $this->name." ".$this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getProductcode()
    {
        return $this->productcode;
    }

    public function setProductcode($productcode)
    {
        $this->productcode = $productcode;

        return $this;
    }

    public function AddImage($newImage)
    {
      array_push($this->images, $newImage);
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    public function getSex()
    {
        return $this->sex;
    }


    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }


    /**
     * Get the value of Prod Type
     *
     * @return mixed
     */
    public function getProdType()
    {
        return $this->prodType;
    }

    /**
     * Set the value of Prod Type
     *
     * @param mixed prodType
     *
     * @return self
     */
    public function setProdType($prodType)
    {
        $this->prodType = $prodType;

        return $this;
    }




}




 ?>
