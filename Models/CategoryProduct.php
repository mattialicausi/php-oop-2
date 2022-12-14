<?php

include_once __DIR__. '/../Traits/DiscountPrice.php';

// classe per le categorie
class CategoryProduct extends Product {
    public bool|string $category;

    use DiscountPrice;
    

    public function __construct($_category, $name, $price, $available)
    {
        parent::__construct($name, $price, $available);
        $this->category = $_category;

        $this->getCategory();
    }


    // funzione per dividere per categoria
    public function getCategory(){
        if($this->category == true){

            return $this->category = "cani";

        } else {

            return $this->category = "gatti";

        }
    }
}

?>