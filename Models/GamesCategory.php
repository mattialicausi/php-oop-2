<?php

// classe per i giochi
class GamesCategory extends CategoryProduct {

    public $dimension;
    public string $description;
    public string $enterprise;
    public $image;



    public function __construct($_category, $name, $price, $available, $_description, $_enterprise, $_dimension = null, $_image = null)
    {
        $this->dimension = $_dimension;
        $this->description = $_description;
        $this->enterprise = $_enterprise;
        $this->image = $_image;

        parent::__construct($_category, $name, $price, $available);

    }
}



?>