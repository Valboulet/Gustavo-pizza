<?php

use App\Authentification;
use App\Connection;
use App\Model\Drink;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('home'));
}

require_once 'modal/add-modify.php';
require_once 'modal/delete.php';

$cssFile = $jsFile = "admin";
$pdo = Connection::getPDO();

$sql = 'SELECT d.name, d.price, d.id FROM drinks AS d';

$query = $pdo->prepare($sql);

$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, Drink::class);

$drinks = $query->fetchAll();
#dd($drinks);

?>


<!-- Drinks -->

<main class="admin">
  <div class="pt-5" id="div-boissons">
    <div class="text-center my-5">
      <h2>Boissons</h2>
    </div>
    <div class="row justify-content-center px-5">
      <div class="col-3 cardspace">
        <div class="card cd-product">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <?php foreach($drinks as $drink): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <span class="fs-5"><?= $drink->getName() ?></span><br>
                  <span><?= number_format($drink->getPrice(), 2) ?> €</span>
                </div>
                <button class="btn-close" type="submit" aria-label="Delete" data-bs-toggle="modal" 
                  data-bs-target="#deleteModal" data-drink-name ="<?= $drink->getName() ?>" data-drink-id="<?= $drink->getId() ?>">
                </button>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="#addModifyModal" data-bs-whatever="une boisson">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
