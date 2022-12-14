<?php

// classe le per cucce
class CucceCategory extends CategoryProduct {

    public string $description;
    public string $enterprise;
    public $image;
    public string $material;



    public function __construct($_category, $name, $price, $available, $_description, $_material, $_enterprise, $_image = null)
    {
        $this->material = $_material;
        $this->description = $_description;
        $this->enterprise = $_enterprise;
        $this->image = $_image;

        parent::__construct($_category, $name, $price, $available);

    

    }
}

?>