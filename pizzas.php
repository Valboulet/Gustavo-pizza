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


<!-- Pizzas Main -->

<main>
  <div class="container text-center pizza-title">
    <h1 class="py-5">Choisissez Votre Pizza</h1>
  </div>
  <div class="row justify-content-center row-cols-1 row-cols-sm-2 gy-3 px-5">

    <div class="card text-center border-0 py-4 px-4 m-3 pizza-box">
      <div class="card-header bg-transparent border-0">
      <div>
          <img src="./assets/images/La Vegetariano.png" alt="">
        </div>
        <h3 class="mt-2">La Vegetariano</h3>
      </div>
      <div class="card-body">
        <div>
          <p>Sauce tomate, Mozarella fior di latte, Poivrons, Champignons, Oignons, Olives noires</p>
        </div>
      </div>
      <div class="card-footer bg-transparent border-0">
        <button type="button" class="btn bt-other" data-bs-toggle="modal"data-bs-target="#selectExtraModal">CHOISIR</button>
      </div>
    </div>

  </div>

  <!-- Modal select Extra/Drink -->

  <div class="modal fade border-0" id="selectExtraModal" tabindex="-1" aria-labelledby="selectExtraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ext-modal">
      <div class="modal-content">
        <div class="modal-header border-0">
          <div>
            <h1 class="modal-title fs-3" id="selectExtraModalLabel">Nom Pizza PHP</h1>
            <h4>Prix Pizza PHP/JS</h4>
          </div>  
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0">
          <div>
            <h5>Supplément (facultatif)</h5>
            <ul class="list-group">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="burrataRadio">
                <label for="burrataRadio" class="form-check-label">Extra Burrata</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="basilicRadio">
                <label for="basilicRadio" class="form-check-label">Extra Basilic</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="meatRadio">
                <label for="meatRadio" class="form-check-label">Extra Viande Hachée</label>
                <p>+ prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listExtraRadio" id="truffleRadio">
                <label for="truffleRadio" class="form-check-label">Extra Truffe</label>
                <p>+ prix php €</p>
              </li>
            </ul>
          </div>
          <hr>
          <div>
            <h5>Boisson</h5>
            <ul class="list-group border-0">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="evianRadio">
                <label for="evianRadio" class="form-check-label">Evian 50cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="perrierRadio">
                <label for="perrierRadio" class="form-check-label">Perrier 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="cocaRadio">
                <label for="cocaRadio" class="form-check-label">Coca-cola 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="tropicanaRadio">
                <label for="tropicanaRadio" class="form-check-label">Tropicana 33cl</label>
                <p>prix php €</p>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listDrinkRadio" id="heinekenRadio">
                <label for="heinekenRadio" class="form-check-label">Heineken 25cl</label>
                <p>prix php €</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center border-0">
          <button type="button" class="btn px-5 py-2 bt-classic">AJOUTER À MA COMMANDE</button>
        </div>
      </div>
    </div>
  </div>

</main>

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