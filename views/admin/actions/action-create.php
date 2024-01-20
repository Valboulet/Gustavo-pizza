<?php

use App\Authentification;
use App\Connection;
use App\Model\Drink;
use App\Table\DrinkTable;

if (!Authentification::verifyRoles('admin')) {
    header('Location: ' . $router->url('login'));
    exit();
  }

$cssFile = "admin";

$pdo = Connection::getPDO();

$drinkTable = new DrinkTable($pdo);

if (!empty($_POST)) {
    $drink = new Drink;

    $drink
        ->setName($_POST['name'])
        ->setPrice($_POST['price']);
    if (isset($_POST['availability']) && $_POST['availability'] === 'on') {
        $drink->setAvailability(1);    
    } elseif (!isset($_POST['avalability'])) {
        $drink->setAvailability(0);
    }

    $drinkTable->createDrink($drink);
}

header('Location: ' . $router->url('admin_drinks'));
