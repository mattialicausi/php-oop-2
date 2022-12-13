<?php

// includo i models
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/CategoryProduct.php';
include_once __DIR__ . '/Models/FoodCategory.php';
include_once __DIR__ . '/Models/GamesCategory.php';
include_once __DIR__ . '/Models/CucceCategory.php';

// PRODUCT
$prodotto1 = new Product("Osso", 5, true);
var_dump($prodotto1);

echo '<br><br>';

// CATEGORY PRODUCT
$prodotto2 = new CategoryProduct(true, "Osso", 5, true);
var_dump($prodotto2);

echo '<br><br>';

// FOOD CATEGORY
$food1 = new FoodCategory('Croccantini', "Alesi", "Lorem ipsum en cose amet illus per dius", "https://www.modacani.it/prodotti/big/937.jpg", 10);
var_dump($food1);


echo '<br><br>';

// GAMES CATEGORY
$games1 = new GamesCategory(true, "Pallina", 5.50, true, "Lorem ipsum faet", "RoyalCanin", "https://images.eprice.it/nobrand/0/hres/344/306580344/EB069971-9EC8-42FD-A3A3-6D433041E2DE.jpg");
var_dump($games1);

echo '<br><br>';

// GAMES CATEGORY
$cuccia1 = new CucceCategory(true, "Barbour, cuccia interno morbido", 5.50, true, "Lorem ipsum faet", "Legno", "RoyalCanin", "https://wips.plug.it/cips/paginegiallecasa/cms/2022/07/shutterstock_2057400995-1-1.jpg?a=c");
var_dump($cuccia1);
?>