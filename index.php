<?php

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/CategoryProduct.php';
include_once __DIR__ . '/Models/FoodCategory.php';

$prodotto1 = new Product("Osso", 5, true);
var_dump($prodotto1);

$prodotto2 = new CategoryProduct(true, "Osso", 5, true);
var_dump($prodotto2);




// FOOD CATEGORY
$food1 = new FoodCategory('Croccantini', "Alesi", "Lorem ipsum en cose amet illus per dius", "https://www.modacani.it/prodotti/big/937.jpg", 10);
var_dump($food1);
?>