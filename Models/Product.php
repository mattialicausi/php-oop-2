<?php

    // classe per i prodotti
    class Product {
        protected $id;
        public string $name;
        public $price;
        public bool $available;
    
        public function __construct($_name, $_price, $_available)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->available = $_available;
        }
    
        }


?>