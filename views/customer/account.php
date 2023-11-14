<?php

use App\Model\Cart;

?>

<!-- Account / Last Order panel --------------------------------------------------------------------------------------------->

<main class="pb-5">
  <div class="text-center py-5">
    <h2>Mon Compte</h2>
  </div>

  <?php
$pdo = new PDO('mysql:dbname=pizzeria;host=127.0.0.1', 'root', '12PoisHaie74?', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
?>


  <div class="row justify-content-center px-5">
    <div class="col-3 cardspace">
      <div class="card">
        <div class="card-body">
            <button type="button" class="btn px-5 py-2 mb-2 bt-other" data-bs-toggle="collapse" data-bs-target="#myAccount" aria-expanded="false" aria-controls="myAccount">MON COMPTE</button>
              <div class="collapse" id="myAccount">
                <div class="card card-body text-center">
                  <h5>Jean DUPONT</h5>
                  <div class="mt-2">
                    <label for="#phone">Téléphone</label>
                    <input class="form-control" type="text" id="phone" placeholder="0300000000" disabled>
                  </div>
                  <div class="mt-2">
                    <label for="#email">E-mail</label>
                    <input class="form-control" type="text" id="email" placeholder="jean.dupont@example.com" disabled>
                  </div>
                  <div class="mt-2 mb-2">
                    <label for="#password">Mot de passe</label>
                    <input class="form-control" type="password" id="password" placeholder="************" disabled>
                  </div>
                  <button type="button" class="btn my-2 bt-yes bt-account">MODIFIER INFOS</button>
                  <button type="button" class="btn bt-no bt-account" data-bs-toggle="modal" data-bs-target="#deleteOrderModal" data-bs-whatever="votre compte">SUPPRIMER COMPTE</button>
                </div>
              </div>

<!-- Calling order and orderlines from carts table --------------------------------------------------------------------------------------------------->

<?php
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

            <button type="button" class="btn px-5 py-2 mt-1 bt-classic" data-bs-toggle="collapse" data-bs-target="#myOrder" aria-expanded="false" aria-controls="myOrder">MA COMMANDE</button>
            <div class="collapse" id="myOrder">
                <div class="card card-body text-center">
                <?php foreach($carts as $cart): ?>
                  <h5><?= $cart->getOrderId() ?></h5>
                  <h4 class="fw-bold">20:00</h4>
                  <?php endforeach ?>
                  <a class="acc-link" data-bs-toggle="collapse" href="#lastOrder" role="button" aria-expanded="false" aria-controls="lastOrder">Voir ma commande</a>
                  <div class="mt-2">
                    <div class="collapse" id="lastOrder">
                    <?php foreach($carts as $cart): ?>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <small class="fs-6 fw-bold"><?= $cart->getPName() ?></small><br>
                          <small><?= $cart->getEName() ?></small><br>
                          <small><?= $cart->getDName() ?></small><br>
                          <small class="fw-bold">Quantité : <?= $cart->getQuantity() ?></small>
                        </li>
                      </ul>
                      <?php endforeach ?>
                    </div>
                  </div>
                  <button type="button" class="btn my-2 bt-yes bt-account">MODIFIER MA COMMANDE</button>
                  <button type="button" class="btn bt-no bt-account" data-bs-toggle="modal" data-bs-target="#deleteOrderModal" data-bs-whatever="cette commande">SUPPRIMER MA COMMANDE</button>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- Delete order Modal -------------------------------------------------------------------------------------------------->

<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="deleteOrderModalLabel">Suppression</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous vraiment supprimer cette commande ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary bt-yes">OUI</button>
          <button type="button" class="btn btn-primary bt-no">NON</button>
        </div>
      </div>
    </div>
  </div>
