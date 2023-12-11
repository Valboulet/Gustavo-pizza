<?php

use App\Authentification;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('home'));
}

require_once 'modal/add-modify.php';
require_once 'modal/delete.php';
$cssFile = $jsFile = "admin";
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
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#imageModal" data-bs-toggle="modal">
                  <img class="" src="./assets/images/la-calzone.png" width="45px" alt="">
                </a>
                <a href="#" class="fs-5">La Calzone</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#imageModal" data-bs-toggle="modal">
                  <img class="" src="./assets/images/la-campania.png" width="45px" alt="">
                </a>
                <a href="#" class="fs-5">La Campania</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#imageModal" data-bs-toggle="modal">
                  <img class="" src="./assets/images/la-vegetariano.png" width="45px" alt="">
                </a>
                <a href="#" class="fs-5">La Vegetariano</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="#addModifyModal" data-bs-whatever="une pizza">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
