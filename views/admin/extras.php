<?php
require_once 'modal/add-modify.php';
require_once 'modal/delete.php';
$cssFile = $jsFile = "admin";
?>

  <!-- Extras -->

<main class="admin">
  <div class="pt-5" id="div-extras">
    <div class="text-center my-5">
      <h2>Extras</h2>
    </div>
    <div class="row justify-content-center px-5">
      <div class="col-3 cardspace">
        <div class="card cd-product">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Basilic</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Burrata</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Viande hachée</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Truffe</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="#addModifyModal" data-bs-whatever="un extra">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
