<?php

use App\Authentification;
use App\Connection;
use App\Table\PizzaTable;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('login'));
  exit();
}

$cssFile = "admin";
$jsFile = 'admin/pizzas';

$pdo = Connection::getPDO();
$pizzas = (new PizzaTable($pdo))->selectPizzas();


?>

  <!-- Pizzas -->

<main class="admin">
  <div class="pt-5" id="div-pizzas">
    <div class="text-center my-5">
      <h2>Pizzas</h2>
    </div>
    <div class="row justify-content-center px-5">
      <div class="col-3 cardspace">
        <div class="card cd-product">
          <div class="card-body">
            <ul class="list-group list-group-flush">

              <?php foreach ($pizzas as $pizza): ?>
                <li class="list-group-item d-flex align-items-center">
                  <a href="#imageModal" data-bs-toggle="modal">
                    <img class="" src="./assets/images/<?= $pizza->getFileName() ?>.png" width="45px" alt="<?= $pizza->getName() ?>">
                  </a>
                  <div class="flex-grow-1 px-3">
                    <a href="#" class="fs-5"><?= $pizza->getName() ?></a><br>
                    <span><?= $pizza->getPrice() ?> €</span>
                  </div>
                  <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target=""></button>
                </li>
              <?php endforeach ?>

            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
