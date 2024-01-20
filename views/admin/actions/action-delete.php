
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
    $pdo = Connection::getPDO();
    $drinkTable = new DrinkTable($pdo);

    $drinkTable->deleteDrink($_POST['id']);
}
header('Location: ' . $router->url('admin_drinks'));

