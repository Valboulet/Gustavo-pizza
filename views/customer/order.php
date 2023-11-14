<?php

use App\Model\Cart;

?>

<!-- Main order content -->

<main class="pb-5">
  <div class="text-center py-5">
    <h2>Ma Commande</h2>
  </div>

<?php
$pdo = new PDO('mysql:dbname=pizzeria;host=127.0.0.1', 'root', '12PoisHaie74?', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$query_orderlines_combined = $pdo->query(
  'SELECT 
    order_id, orderline_id, quantity,
    orders.id AS o_id, 
    orderlines.id AS ol_id, 
    pizzas.name AS p_name, pizzas.price AS p_price,
    extras.name AS e_name, extras.price AS e_price,
    drinks.name AS d_name, drinks.price AS d_price,
    SUM(quantity * (pizzas.price + COALESCE(extras.price, 0) + COALESCE(drinks.price, 0))) AS total_price
  FROM carts
  JOIN orders ON orders.id = carts.order_id
  JOIN orderlines ON orderlines.id = carts.orderline_id
  JOIN pizzas ON orderlines.pizza_id = pizzas.id
  LEFT JOIN extras ON orderlines.extra_id = extras.id
  LEFT JOIN drinks ON orderlines.drink_id = drinks.id
  GROUP BY order_id, orderline_id, quantity'
);  

$carts = $query_orderlines_combined->fetchAll(PDO::FETCH_CLASS, Cart::class);

#dd($carts);

?>

  <div class="row justify-content-center px-5">
    <div class="col-3 cardspace">
      <div class="card">
        <div class="card-body">
        <?php foreach($carts as $cart): ?>
          <ul class="list-group">
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-item-center">
                <h5><?= $cart->getPName() ?></h5>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderlineModal" data-bs-whatever=""></button>
              </div>
              <div class="d-flex justify-content-between align-item-center">
                <div>
                  <small><?= $cart->getEName() ?></small><br>
                  <small><?= $cart->getDName() ?></small>
                </div>
                <select class="form-select nbr-pizza" aria-label="Default select example">
                  <option selected>1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                </select>
              </div>
            </li>
          </ul>
          <?php endforeach ?>
          </div>
          <div class="text-center py-2">
            <h4>Total : <?= $cart->getTotalPrice() ?> €</h4>
          </div>
          <div class="collapse text-center" id="hourSelect">
            <div class="card card-body">
              <h5>Choissisez une heure</h5>
              <select class="form-select" aria-label="Default select example">
                <option selected>Heure</option>
                <option value="1">18:30</option>
                <option value="2">19:00</option>
                <option value="3">19:30</option>
                <option value="3">20:00</option>
                <option value="3">20:30</option>
                <option value="3">21:00</option>
                <option value="3">21:30</option>
                <option value="3">22:00</option>
                <option value="3">22:30</option>
              </select>
              <div class="form-floating my-2">
                <textarea class="form-control" placeholder="Ajouter un message" id="floatingTextarea2" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Message</label>
              </div>
            </div>
        </div>
        <div class="card-footer text-center py-4">
          <button type="button" class="btn px-5 py-2 mb-2 bt-other">AJOUTER UNE PIZZA</button>
          <button type="button" class="btn px-5 py-2 mt-1 bt-classic" data-bs-toggle="collapse" data-bs-target="#hourSelect" aria-expanded="false" aria-controls="hourSelect">ÉTAPE SUIVANTE</button>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- Delete orderline Modal -->

<div class="modal fade" id="deleteOrderlineModal" tabindex="-1" aria-labelledby="deleteOrderlineModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="deleteOrderlineModalLabel">Suppression</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous vraiment supprimer cette ligne ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary bt-yes">OUI</button>
          <button type="button" class="btn btn-primary bt-no">NON</button>
        </div>
      </div>
    </div>
  </div>
