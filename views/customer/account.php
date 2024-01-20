<?php

use App\Authentification;

if (!Authentification::verifyRoles('client')) {
  header('Location: ' . $router->url('home'));
  exit();
}

$jsFile = 'customer/account';

?>

<!-- Account / Last Order panel --------------------------------------------------------------------------------------------->

<main class="pb-5">
  <div class="text-center py-5">
    <h1>Mon Compte</h1>
  </div>
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

          <a role="button" class="btn px-5 py-2 mt-1 bt-classic">MA COMMANDE</a>
          <div>
            <div class="card card-body text-center">
              <h4 class="text-center py-2 order-price">Total : <span id="order-price">40.00</span> €</h4>
                <h5>Order ID</h5>
                <h4 class="fw-bold">20:00</h4>
                <a class="acc-link" data-bs-toggle="collapse" href="#lastOrder" role="button" aria-expanded="false" aria-controls="lastOrder">Voir ma commande</a>
                <div class="mt-2">
                  <div class="collapse" id="lastOrder">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          <small class="fs-6 fw-bold">La Margherita</small>
                          <small class="fw-bold">3</small>
                        </div>
                        <div  class="d-flex justify-content-start">
                          <small>Extra Burrata</small><small class="interspace">|</small>
                          <small>Coca-cola</small>
                        </div>
                      </li>
                    </ul>
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
