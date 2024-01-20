<?php

use App\Authentification;
use App\Connection;
use App\Table\ExtraTable;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('login'));
  exit();
}


$cssFile = "admin";
$jsFile = 'admin/extras';

$pdo = Connection::getPDO();
$extras = (new ExtraTable($pdo))->selectExtras();

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

              <?php foreach ($extras as $extra): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <span class="fs-5"><?= $extra->getName() ?></span><br>
                    <span><?= $extra->getPrice() ?> €</span>
                  </div>  
                  <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target=""></button>
                </li>
              <?php endforeach ?>

            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
