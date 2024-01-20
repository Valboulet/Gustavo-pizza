<?php

use App\Authentification;
use App\Connection;
use App\Table\OrderlineTable;
use App\Table\OrderTable;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('login'));
  exit();
}

require_once 'modal/modal-message.php';

$cssFile = "admin";
$jsFile = 'admin/orders';

$pdo = Connection::getPDO();

$orders = (new OrderTable($pdo))->selectOrders();

$orderlines = (new OrderlineTable($pdo))->selectOrderlines();

?>

<!-- Orders -->

<main class="admin">
  <div class="pt-5" id="div-commandes">
    <div class="text-center my-5">
      <h2>Commandes</h2>
      <h4><?= date('d / m / Y') ?></h4>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-sm-4 g-5 px-5">

    <?php foreach($orders as $order): 
      $totalOrder = 0; ?>
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <div class="float-start mt-2 me-4">
              <button class="btn position-relative acronym" type="button" data-bs-toggle="modal" data-bs-target="#msgModal">
                <?= $order->getInitials() ?>
                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle">0
                  <span class="visually-hidden"></span>
                </span>
              </button>
            </div>
            <div class="float-start hour-name">
              <h4><?= $order->getHour() ?></h4>
              <h6><?= $order->getName() ?></h6>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">

            <?php foreach($orderlines as $orderline): 
                if($order->getId() === $orderline->getOrderId()):
              ?>
              <li class="list-group-item py-3">
                <div class="d-flex justify-content-between">
                  <h5><?= $orderline->getPizzaName() ?></h5>
                  <span><?= $orderline->getPizzaPrice() ?> €</span>
                </div>

                <?php if ($orderline->getExtraName() !== null && $orderline->getExtraPrice() !== null): ?>
                  <div class="d-flex justify-content-between">
                    <span><?= $orderline->getExtraName() ?></span>
                    <span><?= $orderline->getExtraPrice() ?> €</span>
                  </div>
                <?php endif ?>


                <?php if ($orderline->getDrinkName() !== null && $orderline->getDrinkPrice() !== null): ?>
                  <div class="d-flex justify-content-between">
                    <span><?= $orderline->getDrinkName() ?></span>
                    <span><?= $orderline->getDrinkPrice() ?> €</span>
                  </div>
                <?php endif ?>

                <div class="d-flex justify-content-between text-danger fw-bold mt-1">
                  <span>Quantité : <?= $orderline->getQuantity() ?></span>
                  <span>
                    <?= $totalOrderline = ($orderline->getPizzaPrice() + $orderline->getExtraPrice() + $orderline->getDrinkPrice()) * $orderline->getQuantity() ?> €
                  </span>
                </div>
              </li>
            <?php
              $totalOrder += $totalOrderline; 
              endif; endforeach ?>

            </ul>
          </div>
          <div class="card-footer">
            <h4 class="text-center">Total : <?= $totalOrder ?> € </h4>
          </div>
        </div>
      </div>
    <?php endforeach ?>

    </div>
  </div>
</main>
