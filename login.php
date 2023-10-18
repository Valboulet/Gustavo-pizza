<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Gustavo Pizzeria login</title>
</head>
<body>
  <div class="container text-center logo-form">
    <div class="container mb-5 mt-5 pt-5">
      <img src="./assets/images/Logo_Gustavo.png" alt="" class="mx-auto d-block logo">
    </div>
    <form class="container connexion" action="">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Login" required>
        <label for="floatingInput">E-mail</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Mot de passe</label>
      </div>
      <div class="d-grid">
        <button class="btn bt-classic" type="submit">SE CONNECTER</button>
      </div>
    </form>
    <div class="mt-5">
      <p>Vous n'avez pas encore de compte ?</p>
      <button class="btn bt-other" type="button" data-bs-toggle="modal" data-bs-target="#accountModal">CRÉER UN COMPTE</button>
    </div>
  </div> 
  
  <!-- Modal account Creation -->

  <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-3 mx-auto ps-5" id="accountModalLabel">Créer mon compte</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingName" required>
              <label for="floatingName">Nom</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingFirstname" required>
              <label for="floatingFirstname">Prénom</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmail" required>
              <label for="floatingEmail">E-mail</label>
            </div>
            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="floatingPhone" required>
              <label for="floatingPhone">Téléphone</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" required>
              <label for="floatingPassword">Mot de passe</label>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn px-5 py-2 bt-classic">VALIDER</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>

