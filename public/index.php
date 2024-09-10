<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$sitename = 'Twig 101';

echo $twig->render('home.html.twig', ['sitename' => $sitename]);
