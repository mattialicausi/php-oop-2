<?php


// classe per il cibo estesa dalla categoria
class FoodCategory extends CategoryProduct {
    public string $type;
    public string $enterprise;
    public string $description;
    public $image;
    public $weight;


    public function __construct($_type, $_enterprise, $_description, $_image = null, $_weight)
    {
        $this->type = $_type;
        $this->enterprise = $_enterprise;
        $this->description = $_description;
        $this->image = $_image;
        $this->weight = $_weight;
    }
}


?>