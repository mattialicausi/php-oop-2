<?php

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/CategoryProduct.php';

$prodotto1 = new Product("Osso", 5, true);
var_dump($prodotto1);

$prodotto2 = new CategoryProduct(true, "Osso", 5, true);
var_dump($prodotto2);

?>