<?php

use App\Authentification;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
  if (empty($_SESSION)) {
    $connection = ['url' => 'login', 'button' => 'SE CONNECTER'];
  } else {
    $connection = ['url' => 'logout', 'button' => 'SE DÉCONNECTER'];
  }
}
?>

<nav class="navbar sticky-top navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand ms-4" href="<?= $router->url('home') ?>">
      <img src="./assets/images/Logo_Gustavo.png" alt="logo" width="70">
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-lg-0 mt-4 ms-4" id="navbarToggler">
      <ul class="nav ms-auto me-4 list-group list-group-horizontal-lg">

        <?php
          if (!empty($_SESSION)):
            if (Authentification::verifyRoles('admin')):
        ?>
          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('admin_orders') ?>">
              COMMANDES
            </a>
          </li>
          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('admin_pizzas') ?>">
              PIZZAS
            </a>
          </li>
          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('admin_extras') ?>">
              EXTRAS
            </a>
          </li>
          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('admin_drinks') ?>">
              BOISSONS
            </a>
          </li>
        
        <?php elseif (Authentification::verifyRoles('client')): ?>

          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('order') ?>">
              COMMANDER
            </a>
          </li>
          <li class="nav-item my-lg-auto me-4 mb-4 ms-2">
            <a class="nav-link" role="button" href="<?= $router->url('account') ?>">
              MON COMPTE
            </a>
          </li>
        
        <?php endif; endif ?>

        <li class="nav-item my-lg-auto mb-4 ms-2">
          <form action="<?= $router->url($connection['url']) ?>" method="post">
            <button class="btn nav-link px-4 py-3 bt-classic" type="submit">
              <?= $connection['button'] ?>
            </button>
          </form>
        </li>

      </ul>
    </div>
  </div>
</nav>