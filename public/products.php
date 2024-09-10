<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$page = 'Mes produits';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products, 'page' => $page]);
