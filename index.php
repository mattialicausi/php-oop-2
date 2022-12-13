<?php

include_once __DIR__ . '/Models/Product.php';

$prodotto1 = new Product("Osso", "Cani", 5, true);
var_dump($prodotto1);

?>