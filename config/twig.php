<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

$sitename = 'Twig 101';
$twig->addGlobal('sitename', $sitename);
$emailContact = 'twig101@twig.fr';
$twig->addGlobal('contactEmail', $emailContact);
