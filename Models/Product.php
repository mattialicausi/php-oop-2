<?php

    // classe per i prodotti
    class Product {
        protected $id;
        public string $name;
        // public $category;
        public $price;
        public bool $available;
        private $discount;
    
        public function __construct($_name, $_price, $_available)
        {
            $this->name = $_name;
            // $this->category = $_category;
            $this->price = $_price;
            $this->available = $_available;
        }
    
        }


?>