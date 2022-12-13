<?php


// classe per il cibo estesa dalla categoria
class FoodCategory extends CategoryProduct {
    public string $type;
    public string $enterprise;
    public string $description;
    public string $image;
    public string $weight;


    public function __construct($_category, $name, $price, $available, $_type, $_enterprise, $_description, $_weight, $_image = null)
    {
        $this->type = $_type;
        $this->enterprise = $_enterprise;
        $this->description = $_description;
        $this->image = $_image;
        $this->weight = $_weight;


        parent::__construct($_category, $name, $price, $available);
    }
}


?>