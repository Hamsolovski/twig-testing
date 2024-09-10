<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$page = 'Détails';

echo $twig->render('details.html.twig', ['page' => $page]);
