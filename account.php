<?php
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Gustavo Pizzeria</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">
      <img src="./assets/images/Logo_Gustavo.png" alt="logo" width="70">
    </a>
    <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-sm-0 mt-4 ms-4" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto me-4">
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-4">
          <a class="nav-link py-sm-3" aria-current="page" href="#">COMMANDER</a>
        </li>
        <li class="nav-item mb-sm-0 me-4 mb-4 ms-4">
          <a class="nav-link py-sm-3" href="#">CONTACT</a>
        </li>
        <li class="nav-item mb-sm-0 mb-4 ms-0">
          <a role="button" class="btn nav-link px-4 py-3 bt-classic">SE CONNECTER</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Account / Last Order panel -->

<main class="pb-5">
  <div class="text-center py-5">
    <h2>Mon Compte</h2>
  </div>
  <div class="row justify-content-center px-5">
    <div class="col-3 cardspace">
      <div class="card">
        <div class="card-body">
            <button type="button" class="btn px-5 py-2 mb-2 bt-other" data-bs-toggle="collapse" data-bs-target="#myAccount" aria-expanded="false" aria-controls="myAccount">MON COMPTE</button>
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
            <button type="button" class="btn px-5 py-2 mt-1 bt-classic" data-bs-toggle="collapse" data-bs-target="#myOrder" aria-expanded="false" aria-controls="myOrder">MA COMMANDE</button>
            <div class="collapse" id="myOrder">
                <div class="card card-body text-center">
                  <h5>n°45822161-98</h5>
                  <h4 class="fw-bold">20:00</h4>
                  <a class="acc-link" data-bs-toggle="collapse" href="#lastOrder" role="button" aria-expanded="false" aria-controls="lastOrder">Voir ma commande</a>
                  <div class="mt-2">
                    <div class="collapse" id="lastOrder">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <small class="fs-6 fw-bold">La Margherita</small><br>
                          <small>Extra Basilic</small><br>
                          <small>Tropicana 33cl</small><br>
                          <small class="fw-bold">Quantité : 1</small>
                        </li>
                        <li class="list-group-item">
                          <small class="fs-6 fw-bold">La Salmone</small><br>
                          <small>Coca-cola 33cl</small><br>
                          <small class="fw-bold">Quantité : 2</small>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <button type="button" class="btn my-2 bt-yes bt-account">MODIFIER MA COMMANDE</button>
                  <button type="button" class="btn bt-no bt-account" data-bs-toggle="modal" data-bs-target="#deleteOrderModal" data-bs-whatever="cette commande">SUPPRIMER MA COMMANDE</button>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- Delete order Modal -->

<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="deleteOrderModalLabel">Suppression</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous vraiment supprimer cette commande ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary bt-yes">OUI</button>
          <button type="button" class="btn btn-primary bt-no">NON</button>
        </div>
      </div>
    </div>
  </div>


<!-- Footer -->
<footer class="container-fluid text-center" id="footer">
  <div class="row py-4">
    <div class="col-md-4 pt-5">
      <a class="navbar-brand" href="#">
        <img src="./assets/images/Logo_Gustavo-white.png" alt="logo" width="90">
      </a>
    </div>
    <div class="col-md-4 pt-5 mb-0">
      <span class="footer-title">HORAIRES D'OUVERTURE</span>
      <p>Du lundi au samedi De 11h30 à 14h30 et de 18h30 à 22h30</p><br>
      <span class="footer-title">CONTACT</span>
      <p>13 rue du basilic 99000 PIZZAVILLE</p>
      <p>Tél : 03 00 00 00 00</p>
    </div>
    <div class="col-md-4 pt-5">
      <span>SUIVEZ-VOUS</span><br><br>
      <a href="">
        <i class="bi bi-facebook mx-2"></i>
      </a>
      <a href="">
        <i class="bi bi-instagram mx-2"></i>
      </a>
      <a href="">
        <i class="bi bi-tiktok mx-2"></i>
      </a>
    </div>
  </div><hr>
  <div class="row py-3">
    <div class="col-md-6">
      Copyright© 2023 - Gustavo Pizza
    </div>
    <div class="col-md-6">
      <a href="">
        <p>Politique de confidentialité</p>
      </a>
    </div>
  </div>
</footer>

<!-- Scripts -->
  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>