<?php
    switch ($navbar):
    case 'customer' :
?>

<!-- Navbar --------------------------------------------------------------------------------------------------->

<nav class="navbar sticky-top navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand ms-4" href="<?= $router->url('home') ?>">
      <img src="./assets/images/Logo_Gustavo.png" alt="logo" width="70">
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-sm-0 mt-4 ms-4" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto me-4">
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-3">
          <a class="nav-link py-sm-3" aria-current="page" href="#">COMMANDER</a>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-3">
          <a class="nav-link py-sm-3" href="#footer">CONTACT</a>
        </li>
        <li class="nav-item mb-sm-0 mb-4 ms-0">
          <a role="button" class="btn nav-link px-4 py-3 bt-classic">SE CONNECTER</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<?php 
        break;
    case 'admin' :
?>


<!-- Navbar Admin --------------------------------------------------------------------------------------------------->

<nav class="navbar sticky-top navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand ms-4" href="<?= $router->url('home') ?>">
      <img src="./assets/images/Logo_Gustavo.png" alt="logo" width="70">
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-sm-0 mt-4 ms-4" id="navbarTogglerDemo02">
      <ul class="nav ms-auto me-4 list-group list-group-horizontal-md" role="tablist">
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2">
          <a class="nav-link py-sm-3" role="button" href=" <?= $router->url('admin_orders') ?>">
            COMMANDES
          </a>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2">
          <a class="nav-link py-sm-3" role="button" href=" <?= $router->url('admin_pizzas') ?>">
            PIZZAS
          </a>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2">
          <a class="nav-link py-sm-3" role="button" href=" <?= $router->url('admin_extras') ?>">
            EXTRAS
          </a>
        </li>
        <li class="nav-item mb-sm-0 mb-4 ms-2">
          <a class="nav-link py-sm-3" role="button" href=" <?= $router->url('admin_drinks') ?>">
            BOISSONS
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php 
        break;
    endswitch;
?>