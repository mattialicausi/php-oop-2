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
$food1 = new FoodCategory(true, "Medium/Adult", 3.5, true, 'Biscotti', "Alesi", "Lorem ipsum en cose amet illus per dius", 10, "https://www.modacani.it/prodotti/big/937.jpg");
var_dump($food1);

$food2 = new FoodCategory(false,"Small", 2.5, false,'Croccantini', "Bruno", "Lorem ipsum en cose amet illus mes", 5, "https://m.media-amazon.com/images/I/81swFbHrE4L._AC_SY355_.jpg");
var_dump($food2);



echo '<br><br>';

// GAMES CATEGORY
$games1 = new GamesCategory(true, "Pallina", 5.50, true, "Lorem ipsum faet", "RoyalCanin", "https://images.eprice.it/nobrand/0/hres/344/306580344/EB069971-9EC8-42FD-A3A3-6D433041E2DE.jpg");
var_dump($games1);

$games2 = new GamesCategory(false, "Pelouches", 12, true, "Lorem ipsum gatto", "GattoRoyal", "https://www.zampashop.com/10463-large_default/gioco-per-gatti-peluche-c.jpg");
var_dump($games2);

echo '<br><br>';

// CUCCE CATEGORY
$cuccia1 = new CucceCategory(true, "Barbour, cuccia interno morbido", 45, true, "Lorem ipsum faet", "Legno", "RoyalCanin", "https://wips.plug.it/cips/paginegiallecasa/cms/2022/07/shutterstock_2057400995-1-1.jpg?a=c");
var_dump($cuccia1);

$cuccia2 = new CucceCategory(false, "GattoComodo, cuccia rotonda", 20, true, "Lorem ipsum faet", "Legno", "RoyalGatto", "https://cdn.shopify.com/s/files/1/0558/4771/4869/products/Cuccia-gatto-grigio_grande.jpg?v=1646739774");
var_dump($cuccia2);


// includo il codice html
include_once __DIR__.'/partials/header.php';

include_once __DIR__ . '/partials/main.php';

include_once __DIR__.'/partials/footer.php';

?>