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

<!-- Main -->

<!-- Hero -->

<div class="p-5 text-center bg-image hero" style="
    background-image:linear-gradient(to bottom,
    rgba(0, 0, 0, 0.9),
    rgba(0, 0, 0, 0.6)), url(./assets/images/hero.png);">
  <div>
    <div class="d-flex justify-content-center align-items-center">
      <div class="txt-box">
        <h1 class="mb-5">Traditionnelles, Généreuses, Gourmandes</h1>
        <h4 class="mb-5">Dégustez les pizzas qui raviront vos papilles !</h4>
        <button type="button" class="btn px-5 py-2 bt-other">COMMANDER</button>
        <button type="button" class="btn px-5 py-2 bt-classic">CONTACT</button>
      </div>
    </div>
  </div>
</div>

<!-- Content -->

<div class="container text-center pt-5 content-box">
  <div class="row">
    <div class="col-md-6 col-lg-6 pt-5 px-5">
      <h2>Des ingrédients soigneusement sélectionnés</h2><br>
      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolorem consequatur aliquam debitis cumque ipsa amet quis laudantium fuga ratione?</h5>
    </div>
    <div class="col bg-image" style="background-image:url(./assets/images/ingredients_index.png);
      height: 350px; background-repeat: no-repeat; margin: 50px;">
    </div>
  </div>
  <div class="row">
    <div class="col bg-image" style="background-image:url(./assets/images/feu_de_bois.png);
      height: 350px; background-repeat: no-repeat; margin: 0 50px;">
    </div>
    <div class="col-md-6 col-lg-6 pt-5 px-5 mb-5">
      <h2>Une cuisson traditionnelle au feu de bois</h2><br>
      <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In voluptate numquam atque quo accusantium reprehenderit dolores dolorum nesciunt sit sed repellat corporis, tempore ut laborum!</h5>
    </div>
  </div>
</div>

<!-- Last button -->

<div class="container d-flex justify-content-center align-items-center last-button">
  <button type="button" class="btn px-5 py-2 bt-other">COMMANDER MES PIZZAS</button>
</div>

<!-- Footer -->
<footer class="container-fluid text-center">
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
      <i class="bi bi-facebook mx-2"></i>
      <i class="bi bi-instagram mx-2"></i>
      <i class="bi bi-tiktok mx-2"></i>
    </div>
  </div><hr>
  <div class="row py-3">
    <div class="col-md-6">
      Copyright© 2023 - Gustavo Pizza
    </div>
    <div class="col-md-6">
      Politique de confidentialité
    </div>
  </div>
</footer>

<!-- Scripts -->
  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>