<?php

use App\Authentification;
use App\Connection;
use App\Table\DrinkTable;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('login'));
  exit();
}

require_once 'modal/modal-create.php';
require_once 'modal/modal-update.php';
require_once 'modal/modal-delete.php';
require_once 'modal/modal-warning.php';



$cssFile = "admin";
$jsFile = 'admin/drinks';

$pdo = Connection::getPDO();
$drinks = (new DrinkTable($pdo))->selectDrinks();
$drinksLinked = (new DrinkTable($pdo))->selectDrinksLinkedToday();

$disabled = '';

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

              <?php foreach($drinks as $drink):
              
                $datasDrink[] = [
                  'id' => $drink->getId(),
                  'name' => $drink->getName(),
                  'price' => $drink->getPrice(),
                  'availability' => $drink->getAvailability()
                ];
                $json_datasDrink = json_encode($datasDrink);
              ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <span class="fs-5"><?= $drink->getName() ?></span><br>
                    <span><?= $drink->getPrice() ?> €</span>
                    <span class="text-danger fw-bold ms-2"><?= !$drink->getAvailability() ? 'Indisponible' : '' ?></span>
                  </div>
                  <div>
                    <a href="#updateModal" data-bs-toggle="modal" data-drink-id="<?= $drink->getId() ?>">
                      <i class="bi bi-pencil-fill"></i>
                    </a>
                    <?php foreach($drinksLinked as $drinkLinked) {
                      if ($drink->getID() === $drinkLinked->getId()) {
                        $disabled = 'disabled';
                        break;
                      } else {
                        $disabled = '';
                      }
                    }
                    ?>
                    <span>
                      <button type="button" class="btn-close ms-2" data-bs-toggle="modal"
                          data-bs-target="<?= !$drink->getAvailability() ? '#deleteModal' : '#warningModal' ?>" 
                          aria-label="Close" data-drink-id="<?= $drink->getId() ?>" <?= $disabled ?>>
                      </button>
                    </span>
                  </div>
                </li>
              <?php endforeach ?>

            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="#createModal" data-bs-whatever="une boisson">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>let datasDrink = <?= $json_datasDrink ?></script>
