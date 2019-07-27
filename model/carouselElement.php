<?php
    namespace model;


    class CarouselElement{

    private $idelement;
    private $name;
    private $type;

    function __construct()
    {

    }

    /**
     * Get the value of Idelement
     *
     * @return mixed
     */
    public function getIdelement()
    {
        return $this->idelement;
    }

    /**
     * Set the value of Idelement
     *
     * @param mixed idelement
     *
     * @return self
     */
    public function setIdelement($idelement)
    {
        $this->idelement = $idelement;

        return $this;
    }

    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}
?>
