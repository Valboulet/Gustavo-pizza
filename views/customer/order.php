<?php

use App\Authentification;
use App\Model\Recipe;

if (!Authentification::verifyRoles('client')) {
  header('Location: ' . $router->url('home'));
}

require_once 'modal/deleteOrder.php';
require_once 'modal/confirmOrder.php';


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
            <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="burrataRadio">
                  <label for="burrataRadio" class="form-check-label">Extra Burrata</label>
                </div>
                <span>3.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="basilicRadio">
                  <label for="basilicRadio" class="form-check-label">Extra Basilic</label>
                </div>
                <span>3.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="meatRadio">
                  <label for="meatRadio" class="form-check-label">Extra Viande Hachée</label>
                </div>
                <span>3.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="truffleRadio">
                  <label for="truffleRadio" class="form-check-label">Extra Truffe</label>
                </div>
                <span>3.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="noExtraRadio" checked>
                  <label for="noExtraRadio" class="form-check-label">Sans extra</label>
                </div>
              </li>
            </ul>
          </div>
          <hr>
          <div>
            <h5>Boisson</h5>
            <ul class="list-group border-0">
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="evianRadio">
                  <label for="evianRadio" class="form-check-label">Evian 50cl</label>
                </div>
                <span>2.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="perrierRadio">
                  <label for="perrierRadio" class="form-check-label">Perrier 33cl</label>
                </div>
                <span>2.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="cocaRadio">
                  <label for="cocaRadio" class="form-check-label">Coca-cola 33cl</label>
                </div>
                <span>2.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="tropicanaRadio">
                  <label for="tropicanaRadio" class="form-check-label">Tropicana 33cl</label>
                </div>
                <span>2.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="heinekenRadio">
                  <label for="heinekenRadio" class="form-check-label">Heineken 25cl</label>
                </div>
                <span>2.00 €</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="noDrinkRadio" checked>
                  <label for="noDrinkRadio" class="form-check-label">Sans boisson</label>
                </div>
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

<!-- Offcanvas Cart  -->

<div class="offcanvas offcanvas-end order" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title" id="offcanvasCartLabel">Votre Panier</h2>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasCart" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h4 class="text-center py-2 order-price">Total : <span id="order-price">40.00</span> €</h4>
    <div class="d-flex justify-content-center mb-3">
      <button type="button" class="btn px-4 py-2 me-2 bt-yes" data-bs-dismiss="offcanvas">AJOUTER</button>
      <button type="button" class="btn px-4 py-2 bt-no" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">TOUT SUPPRIMER</button>
    </div>

    <ul class="list-group">
      <li class="list-group-item">
        <div class="d-flex justify-content-between align-item-center">
          <h5>La Margherita</h5>
          <div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#selectExtraModal"><i class="bi bi-pencil me-2"></i></a>
            <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-item-center">
          <div>
            <small>Extra Burrata</small><br>
            <small>Perrier 33cl</small>
          </div>
          <select class="form-select nbr-pizza" aria-label="Default select example">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>

          </select>
        </div>
      </li>
      <li class="list-group-item">
        <div class="d-flex justify-content-between align-item-center">
          <h5>La Calzone</h5>
          <div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#selectExtraModal"><i class="bi bi-pencil me-2"></i></a>
            <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-item-center">
          <div>
            <small>Extra Basilic</small><br>
            <small>Sans boisson</small>
          </div>
          <select class="form-select nbr-pizza" aria-label="Default select example">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>

          </select>
        </div>
      </li>
      <li class="list-group-item">
        <div class="d-flex justify-content-between align-item-center">
          <h5>La Salmone</h5>
          <div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#selectExtraModal"><i class="bi bi-pencil me-2"></i></a>
            <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-item-center">
          <div>
            <small>Sans extra</small><br>
            <small>Perrier 33cl</small>
          </div>
          <select class="form-select nbr-pizza" aria-label="Default select example">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>

          </select>
        </div>
      </li>
      <li class="list-group-item">
        <div class="d-flex justify-content-between align-item-center">
          <h5>La Vegetariano</h5>
          <div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#selectExtraModal"><i class="bi bi-pencil me-2"></i></a>
            <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-item-center">
          <div>
            <small>Extra Truffe</small><br>
            <small>Heineken 25cl</small>
          </div>
          <select class="form-select nbr-pizza" aria-label="Default select example">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>

          </select>
        </div>
      </li>
      <li class="list-group-item">
        <div class="d-flex justify-content-between align-item-center">
          <h5>La Pimento</h5>
          <div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#selectExtraModal"><i class="bi bi-pencil me-2"></i></a>
            <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-item-center">
          <div>
            <small>Extra Viande Hachée</small><br>
            <small>Tropicana 33cl</small>
          </div>
          <select class="form-select nbr-pizza" aria-label="Default select example">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>

          </select>
        </div>
      </li>

    </ul>

    </div>

    <div class="container card card-body text-center " id="hourSelect">
      <div>
        <h5>Choissisez une heure</h5>
        <select class="form-select" id="select-hour" aria-label="Default select example" required>
          <option selected>Heure</option>
          <option value="1">18:30</option>
          <option value="2">19:00</option>
          <option value="3">19:30</option>
          <option value="4">20:00</option>
          <option value="5">20:30</option>
          <option value="6">21:00</option>
          <option value="7">21:30</option>
          <option value="8">22:00</option>
          <option value="9">22:30</option>
        </select>
        <div class="d-none" id="cart-feedback">
          <small class="text-danger">Veuillez sélectionner une heure</small>
        </div>
        <div class="form-floating my-2">
          <textarea class="form-control" placeholder="Ajouter un message" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Message</label>
        </div>
        <button type="button" class="btn my-3 px-5 py-4 fw-bold bt-other" id="validate-order"  data-bs-target="#confirmOrderModal">VALIDER MA COMMANDE</button>
      </div>
    </div>

</div>

</main>

