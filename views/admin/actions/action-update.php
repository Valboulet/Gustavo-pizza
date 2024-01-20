<?php

use App\Authentification;
use App\Connection;
use App\Table\DrinkTable;

if (!Authentification::verifyRoles('admin')) {
    header('Location: ' . $router->url('login'));
    exit();
  }

$cssFile = "admin";

if (!empty($_POST)) {
    $pdo = Connection::getPDO(); // Create a PDO instance to connect Database
    $drinkTable = new DrinkTable($pdo); // Create an instance of Drinktable with a pdo instance as parameter

    $drink = $drinkTable->selectDrinkById($_POST['id']);

    $drink->setPrice($_POST['price']);
    if (isset($_POST['availability']) && $_POST['availability'] === 'on') {
      $drink->setAvailability(1);    
    } elseif (!isset($_POST['avalability'])) {
      $drink->setAvailability(0);
    }
    $drinkTable->updateDrink($drink);
}

header('Location: ' . $router->url('admin_drinks'));
