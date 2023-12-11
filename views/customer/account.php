<?php

use App\Authentification;
use App\Model\Cart;

if (!Authentification::verifyRoles('client')) {
  header('Location: ' . $router->url('home'));
}

?>

<!-- Account / Last Order panel --------------------------------------------------------------------------------------------->

<main class="pb-5">
  <div class="text-center py-5">
    <h1>Mon Compte</h1>
  </div>

  <?php
$pdo = new PDO('mysql:dbname=pizzeria;host=127.0.0.1', 'root', '12PoisHaie74?', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
?>


  <div class="row justify-content-center px-5">
    <div class="col-3 cardspace">
      <div class="card account-card">
        <div class="card-body">
            <a role="button" class="btn px-5 py-2 mb-2 bt-other" data-bs-toggle="collapse" href="#myAccount" aria-expanded="false" aria-controls="myAccount">MON COMPTE</a>
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

            <a role="button" class="btn px-5 py-2 mt-1 bt-classic" data-bs-toggle="collapse" href="#myOrder" aria-expanded="true" aria-controls="myOrder">MA COMMANDE</a>
            <div class="collapse" id="myOrder">
                <div class="card card-body text-center">
                <h4 class="text-center py-2 order-price">Total : <span id="order-price">40.00</span> €</h4>
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
                          <div class="d-flex justify-content-between">
                            <small class="fs-6 fw-bold"><?= $cart->getPName() ?></small>
                            <small class="fw-bold">X <?= $cart->getQuantity() ?></small>
                          </div>
                          <div  class="d-flex justify-content-start">
                            <small><?= $cart->getEName() ?></small><small class="interspace">|</small>
                            <small><?= $cart->getDName() ?></small>
                          </div>
                        </li>
                      </ul>
                      <?php endforeach ?>
                    </div>
                  </div>
                  <a role="button" href=" <?= $router->url('order') ?>" class="btn my-2 bt-yes bt-account">MODIFIER MA COMMANDE</a>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</main>
