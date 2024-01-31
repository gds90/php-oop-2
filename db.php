<?php

// recupero i file delle classi
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Accessorio.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Gioco.php';

// creo le istanze della classe Categoria
$dog = new Categoria("Cane");
$cat = new Categoria("Gatto");
$bird = new Categoria("Uccelli");
$fish = new Categoria("Pesci");

// creo le istanze dei prodotti
$product_1 = new Cibo("Royal Canin", 40.99, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", $dog, "Mini Adult", "Crocchette/Secco", "Manzo");
$product_2 = new Cibo("Almo Nature", 29.90, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-dog-adult-medium-pollo-e-riso.jpg", $dog, "Holistic Maintenance Medium Large", "Crocchette/Secco", "Pollo e riso");
$product_3 = new Cibo("Almo Nature", 2.99, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $cat, "Cat Daily Lattina", "Umido", "Vitello");
$product_4 = new Cibo("Tetra", 4.90, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $fish, "Mangime per Pesci Guppy in Fiocchi", "Fiocchi", "/");
$product_5 = new Accessorio("HappyBirds", 49.90, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $bird, "Voliera Wilma in Legno", "Uccelli di taglia piccola", "Legno");
$product_6 = new Accessorio("EasyCristal", 6.99, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $fish, "Cartucce Filtranti per Filtro EasyCrystal", "Acquari per pesci", "Materiale naturale");
$product_7 = new Gioco("Kong", 8.00, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $dog, "Kong Classic 8cm", "Cani di taglia piccola", "Plastica dura");
$product_8 = new Gioco("Trixie", 1.99, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $cat, "Topini di peluche", "Gatti di tutte le taglie", "Plastica/Polyestere");

// creo un array dei prodotti
$products = [
    $product_1, $product_2, $product_3, $product_4, $product_5, $product_6, $product_7, $product_8
];
