<?php

use App\Authentification;
use App\Connection;
use App\Table\RecipeTable;

if (!Authentification::verifyRoles('client')) {
  header('Location: ' . $router->url('home'));
  exit();
}

$jsFile = 'customer/order';

$pdo = Connection::getPDO();

require_once 'modal/extras-drinks.php';
require_once 'offcanvas/cart.php';
require_once 'modal/deleteOrder.php';
require_once 'modal/confirmOrder.php';

$recipes = (new RecipeTable($pdo))->selectPizzasWithIngredients();
?>

<!-- Pizzas Main ----------------------------------------------------------------------------------------------------------->

<main>

  <div class="container d-flex justify-content-end">
    <div class="d-flex justify-content-center align-items-center cart-div" id="cart-icon-div">
      <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button" aria-controls="offcanvasCart">
        <i class="bi bi-bag-plus-fill cart"></i>
      </a>
    </div>
  </div>

  <div class="container text-center pizza-title">
    <h1 class="pb-5">Choisissez Votre Pizza</h1>
  </div>

  <div class="row justify-content-center row-cols-1 row-cols-sm-2 gy-3 px-5 pb-5">

    <?php foreach($recipes as $recipe): ?>
      <div class="card shadow text-center border-0 py-4 px-4 m-3 pizza-box">
        <div class="card-header bg-transparent border-0">
          <div>
            <img src="./assets/images/<?= $recipe->getPizzaFileName() ?>.png" alt="<?= $recipe->getPizzaName() ?>">
          </div>
          <h3 class="mt-2"><?= $recipe->getPizzaName() ?></h3>
          <p><?= $recipe->getPizzaPrice() ?> €</p>
        </div>
        <div class="card-body">
          <div>
            <p><?= $recipe->getIngredientsNames() ?></p>
          </div>
        </div>
        <div class="card-footer bg-transparent border-0">
          <button type="button" class="btn bt-other" data-bs-toggle="modal" data-bs-target="#extrasDrinksModal"
              data-pizza-name="<?= $recipe->getPizzaName() ?>" data-pizza-price="<?= $recipe->getPizzaPrice() ?>">
            CHOISIR
          </button>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</main>