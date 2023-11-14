<?php

use App\Model\Recipe;

?>

<!-- Pizzas Main ----------------------------------------------------------------------------------------------------------->

<main>
  <div class="container text-center pizza-title">
    <h1 class="py-5">Choisissez Votre Pizza</h1>
  </div>

<?php
$pdo = new PDO('mysql:dbname=pizzeria;host=127.0.0.1', 'root', '12PoisHaie74?', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->query(
  'SELECT pizzas.name as pizza_name, pizzas.price as pizza_price, GROUP_CONCAT(ingredients.name) as ingredients FROM recipes
  JOIN pizzas ON pizzas.id = recipes.pizza_id 
  JOIN ingredients ON ingredients.id = recipes.ingredient_id 
  GROUP BY pizza_name, pizza_price'
);

$recipes = $query->fetchAll(PDO::FETCH_CLASS, Recipe::class);

?>


  <div class="row justify-content-center row-cols-1 row-cols-sm-2 gy-3 px-5 pb-5">
  <?php foreach($recipes as $recipe): ?>
    <div class="card shadow text-center border-0 py-4 px-4 m-3 pizza-box">
      <div class="card-header bg-transparent border-0">
      <div>
          <img src="./assets/images/<?= $recipe->getFileName() ?>.png" alt="<?= htmlentities($recipe->getPizzaName()) ?>">
        </div>
        <h3 class="mt-2"><?= htmlentities($recipe->getPizzaName()) ?></h3>
        <p><?= htmlentities($recipe->getPizzaPrice()) ?> €</p>
      </div>
      <div class="card-body">
        <div>
          <p><?= htmlentities($recipe->getIngredients()) ?></p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-0">
        <button type="button" class="btn bt-other" data-bs-toggle="modal"data-bs-target="#selectExtraModal">CHOISIR</button>
      </div>
    </div>
    <?php endforeach ?>
  </div>

  <!-- Modal select Extra/Drink ---------------------------------------------------------------------------------------->

  <div class="modal fade border-0" id="selectExtraModal" tabindex="-1" aria-labelledby="selectExtraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ext-modal">
      <div class="modal-content">
        <div class="modal-header border-0">
          <div>
            <h1 class="modal-title fs-3" id="selectExtraModalLabel">Nom Pizza PHP</h1>
            <h4>Prix Pizza PHP/JS</h4>
          </div>  
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
          <div>
            <h5>Supplément (facultatif)</h5>
            <ul class="list-group">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="burrataRadio">
                <label for="burrataRadio" class="form-check-label">Extra Burrata</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="basilicRadio">
                <label for="basilicRadio" class="form-check-label">Extra Basilic</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="meatRadio">
                <label for="meatRadio" class="form-check-label">Extra Viande Hachée</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="truffleRadio">
                <label for="truffleRadio" class="form-check-label">Extra Truffe</label>
                <p>+ prix php €</p>
              </li>
            </ul>
          </div>
          <hr>
          <div>
            <h5>Boisson</h5>
            <ul class="list-group border-0">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="evianRadio">
                <label for="evianRadio" class="form-check-label">Evian 50cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="perrierRadio">
                <label for="perrierRadio" class="form-check-label">Perrier 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="cocaRadio">
                <label for="cocaRadio" class="form-check-label">Coca-cola 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="tropicanaRadio">
                <label for="tropicanaRadio" class="form-check-label">Tropicana 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="heinekenRadio">
                <label for="heinekenRadio" class="form-check-label">Heineken 25cl</label>
                <p>prix php €</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center border-0">
          <button type="button" class="btn px-5 py-2 bt-classic">AJOUTER À MA COMMANDE</button>
        </div>
      </div>
    </div>
  </div>

</main>