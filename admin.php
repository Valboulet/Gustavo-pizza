<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css">
  <title>Gustavo Pizzeria admin</title>
</head>
<body>

<!-- Admin navbar -->
<nav class="navbar sticky-top navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand ms-4" href="#">
      <img src="./assets/images/Logo_Gustavo.png" alt="logo" width="70">
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-sm-0 mt-4 ms-4" id="navbarTogglerDemo02">
      <ul class="nav ms-auto me-4 list-group list-group-horizontal-md" role="tablist">
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2" role="presentation">
          <button class="nav-link py-sm-3" data-bs-target="#div-commandes" data-bs-toggle="tab" aria-selected="false" aria-controls="commandes" role="tab" type="button" id="btn-commandes">COMMANDES</button>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2" role="presentation">
          <button class="nav-link py-sm-3" data-bs-target="#div-pizzas" data-bs-toggle="tab" aria-selected="false" aria-controls="pizzas" role="tab" type="button" id="btn-pizzas">PIZZAS</button>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-2" role="presentation">
          <button class="nav-link py-sm-3" data-bs-target="#div-extras" data-bs-toggle="tab" aria-selected="false" aria-controls="extras" role="tab" type="button" id="btn-extras">EXTRAS</button>
        </li>
        <li class="nav-item mb-sm-0 mb-4 ms-2" role="presentation">
          <button class="nav-link py-sm-3" data-bs-target="#div-boissons" data-bs-toggle="tab" aria-selected="false" aria-controls="boissons" role="tab" type="button" id="btn-boissons">BOISSONS</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main admin -->

<div class="tab-content">
  <div class="tab-pane fade pt-5" id="div-commandes" role="tabpanel" aria-labelledby="btn-commandes" tabindex="0">
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

    <!-- Modal Card Message Client-->

    <div class="modal fade" id="msgModal" tabindex="-1" aria-labelledby="msgmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <div class="float-start mt-2 me-4">
              <button class="btn acronym" type="button">
                VI
              </button>
            </div>
            <div class="float-start hour-name">
              <h3 class="modal-title" id="msgModalLabel">Nom Client PHP</h3>
              <h4>Téléphone PHP</h4>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, ea optio cupiditate voluptatem officiis sunt id enim quidem temporibus consequatur sit ipsa voluptates ratione dicta vero ipsum facere, labore, blanditiis delectus repellendus error quis exercitationem. Suscipit consequuntur aperiam vel ipsa!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Panel Pizzas -->

  <div class="tab-pane fade pt-5" id="div-pizzas" role="tabpanel" aria-labelledby="btn-pizzas" tabindex="0">
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
                  <img class="" src="./assets/images/La Calzone.png" width="45px" alt="">
                </a>
                <a href="#" class="fs-5">La Calzone</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#imageModal" data-bs-toggle="modal">
                  <img class="" src="./assets/images/La Campania.png" width="45px" alt="">
                </a>
                <a href="#" class="fs-5">La Campania</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#imageModal" data-bs-toggle="modal">
                  <img class="" src="./assets/images/La Vegetariano.png" width="45px" alt="">
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

  <!-- Panel Extras -->

  <div class="tab-pane fade pt-5" id="div-extras" role="tabpanel" aria-labelledby="btn-extras" tabindex="0">
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

  <!-- Panel Boissons -->

  <div class="tab-pane fade pt-5" id="div-boissons" role="tabpanel" aria-labelledby="btn-boissons" tabindex="0">
    <div class="text-center my-5">
      <h2>Boissons</h2>
    </div>
    <div class="row justify-content-center px-5">
      <div class="col-3 cardspace">
        <div class="card cd-product">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Evian 50cl</a>
                <button class="btn-close" type="button" aria-label="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Perrier 33cl</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Coca-cola 33cl</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Tropicana 33cl</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#" class="fs-5">Heineken 25cl</a>
                <button class="btn-close" type="button" aria-label="Delete"></button>
              </li>
            </ul>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <button type="button" class="btn px-5 py-2 bt-classic" data-bs-toggle="modal" data-bs-target="#addModifyModal" data-bs-whatever="une boisson">AJOUTER</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Card Delete Product Confirmation -->

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="deleteModalLabel">Suppression(produit PHP)</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous vraiment supprimer ce produit ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary bt-yes">OUI</button>
          <button type="button" class="btn btn-primary bt-no">NON</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Card Add / Modify Products -->
  <!-- A relier avec JS :  https://getbootstrap.com/docs/5.3/components/modal/   ------------------------------------------------------------------------------------->

  <div class="modal fade" id="addModifyModal" tabindex="-1" aria-labelledby="addModifyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-3" id="addModifyModalLabel">Créer produit PHP</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingTitle">
            <label for="floatingTitle">Titre</label>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingPrice">
              <label for="floatingPrice">Prix</label>
            </div>
            <span class="input-group-text">€</span>
          </div>
          <div class="mb-3">
            <label for="selectFile" class="form-label"></label>
            <input type="file" class="form-control" id="selectFile">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn px-5 py-2 bt-classic">AJOUTER</button>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Scripts -->
  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>
