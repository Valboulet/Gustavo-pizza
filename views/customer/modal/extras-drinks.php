<?php

use App\Table\DrinkTable;
use App\Table\ExtraTable;

$extras = (new ExtraTable($pdo))->selectExtras();
$drinks = (new DrinkTable($pdo))->selectAvailableDrinks();

?>
<!-- Modal select Extra/Drink ---------------------------------------------------------------------------------------->

<div class="modal fade border-0" id="extrasDrinksModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="extrasDrinksModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ext-modal">
    <div class="modal-content">
      <div class="modal-header border-0">
        <div>
          <h1 class="modal-title fs-3" id="pizzaName"></h1>
          <h5 id="pizzaPrice"></h5>
        </div>  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border-0">
        <div>
          <h5>Supplément (facultatif)</h5>
          <ul class="list-group">

            <?php foreach ($extras as $extra): ?>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="extra" id="<?= $extra->getFormatName() ?>">
                  <label class="form-check-label" for="<?= $extra->getFormatName() ?>">
                    <?= $extra->getName() ?>
                  </label>
                </div>
                <span><?= $extra->getPrice() ?> €</span>
              </li>
            <?php endforeach ?>

            <li class="list-group-item d-flex justify-content-between">
              <div>
                <input class="form-check-input me-1" type="radio" name="extra" id="noExtra" checked>
                <label class="form-check-label" for="noExtra">
                  Sans extra
                </label>
              </div>
              <span>0.00 €</span>
            </li>

          </ul>
        </div>
        <hr>
        <div>
          <h5>Boisson</h5>
          <ul class="list-group border-0">

            <?php foreach ($drinks as $drink): ?>
              <li class="list-group-item d-flex justify-content-between">
                <div>
                  <input class="form-check-input me-1" type="radio" name="drink" id="<?= $drink->getFormatName() ?>">
                  <label class="form-check-label" for="<?= $drink->getFormatName() ?>">
                    <?= $drink->getName() ?>
                  </label>
                </div>
                <span><?= $drink->getPrice() ?> €</span>
              </li>
            <?php endforeach ?>

            <li class="list-group-item d-flex justify-content-between">
              <div>
                <input class="form-check-input me-1" type="radio" name="drink" id="noDrink" checked>
                <label class="form-check-label" for="noDrink">Sans boisson</label>
              </div>
              <span>0.00 €</span>
            </li>

          </ul>
        </div>
      </div>

      <div class="modal-footer d-flex justify-content-center border-0">
        <button class="btn px-5 py-2 bt-classic" id="addOrderline" type="button" data-bs-dismiss="modal">
          AJOUTER À MA COMMANDE
        </button>
      </div>
    </div>
  </div>
</div>