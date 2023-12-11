<?php

use App\Authentification;

if (!Authentification::verifyRoles('admin')) {
  header('Location: ' . $router->url('home'));
}

require_once 'modal/message.php';
$cssFile = $jsFile = "admin";
?>

<!-- Orders -->

<main class="admin">
  <div class="pt-5" id="div-commandes">
    <div class="text-center my-5">
      <h2>Commandes</h2>
      <h4>Date du jour : PHP</h4>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-sm-4 g-5 px-5">
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <div class="float-start mt-2 me-4">
              <button class="btn position-relative acronym" type="button" data-bs-toggle="modal" data-bs-target="#msgModal">
                VI
                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle">1
                  <span class="visually-hidden"></span>
                </span>
              </button>
            </div>
            <div class="float-start hour-name">
              <h4>Heure PHP</h4>
              <h6>Nom Client PHP</h6>
            </div>
          </div>
          <div class="card-body">
            <h6>Nom Pizza PHP</h6>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
            <hr>
            <h6>Nom Pizza PHP</h6>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
          </div>
          <div class="card-footer">
            <h4>Total PHP</h4>
          </div>
        </div>
      </div>
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <h4>Heure PHP</h4>
            <h5>Nom Client PHP</h5>
          </div>
          <div class="card-body">
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
          </div>
          <div class="card-footer">
            <h4>Total PHP</h4>
          </div>
        </div>
      </div>
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <h4>Heure PHP</h4>
            <h5>Nom Client PHP</h5>
          </div>
          <div class="card-body">
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
            <hr>
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
            <hr>
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
            <hr>
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
          </div>
          <div class="card-footer">
            <h4>Total PHP</h4>
          </div>
        </div>
      </div>
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <h4>Heure PHP</h4>
            <h5>Nom Client PHP</h5>
          </div>
          <div class="card-body">
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
          </div>
          <div class="card-footer">
            <h4>Total PHP</h4>
          </div>
        </div>
      </div>
      <div class="col-3 cardspace">
        <div class="card cd-basic">
          <div class="card-header">
            <h4>Heure PHP</h4>
            <h5>Nom Client PHP</h5>
          </div>
          <div class="card-body">
            <h5>Nom Pizza PHP</h5>
            <p>Extra PHP</p>
            <p>Boisson PHP</p>
          </div>
          <div class="card-footer">
            <h4>Total PHP</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
