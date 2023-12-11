<?php

use App\Authentification;
use App\Connection;
use App\Table\UserTable;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
  if (!empty($_SESSION)) {
    if (Authentification::verifyRoles('client')) {
      header('Location: ' . $router->url('order'));
      exit();
    } elseif (Authentification::verifyRoles('admin')) {
      header('Location: ' . $router->url('admin_orders'));
      exit();
    }
  }
}

require_once 'modal/account-creation.php';
$jsFile = 'login';

if (!empty($_POST)) {
  $pdo = Connection::getPDO();
  $userTable = new UserTable($pdo);
  $userTarget = $userTable->selectUserByEmail($_POST['email']);
  
  if ($userTarget === false) {
    $error = 'Identifiants incorrects';
  } else {
    $result = password_verify($_POST['password'], $userTarget->getPassword());

    if ($result === false) {
      $error = 'Identifiants incorrects';
    } else {

      if ($userTarget->getRole() == 'client') {
        $_SESSION = [
          'user' => $userTarget->getId(),
          'role' => $userTarget->getRole()
        ];
        header('Location: ' . $router->url('order'));
        exit();

      } elseif ($userTarget->getRole() == 'admin') {
        $_SESSION = [
          'user' => $userTarget->getId(),
          'role' => $userTarget->getRole()
        ];
        header('Location: ' . $router->url('admin_orders'));
        exit();
      }
    }
  }
}
?>

<!-- Login page / form ---------------------------------------------------------------------------------->

<div class="container text-center logo-form">
  <div class="container mb-5 pt-5">
    <a href="<?= $router->url('home') ?>">
      <img class="mx-auto d-block logo" src="./assets/images/Logo_Gustavo.png" alt="Logo">
    </a>
  </div>

  <form class="container connexion" action="<?= $router->url('login') ?>" method="post" id="loginForm">
    <div class="form-floating mb-3">
      <input class="form-control" type="email" name="email" id="emailUser" placeholder="E-mail" required>
      <label for="emailUser">E-mail</label>
    </div>
    <small class="invalid-feedback d-none" id="emailError">E-mail incorrect</small>
    <div class="form-floating mb-3">
      <input class="form-control" type="password" name="password" id="passwordUser" placeholder="Mot de passe" required>
      <label for="passwordUser">Mot de passe</label>
    </div>
    <small class="invalid-feedback d-none" id="passwordError">Mot de passe incorrect</small>
    <div class="d-grid">
      <button class="btn bt-classic" type="button" id="submitUser">SE CONNECTER</button>
    </div>
  </form>

  <?php if (isset($error)): ?>
    <small class="text-danger"><?= $error ?></small>
  <?php
    endif;
    if (isset($_GET['access']) && $_GET['access'] == 0 && !isset($error)):
  ?>
    <small class="text-danger">Connectez-vous pour commander votre pizza</small>
  <?php endif ?>

  <div class="mt-5">
    <p>Vous n'avez pas encore de compte ?</p>
    <button class="btn bt-other" type="button" data-bs-toggle="modal" data-bs-target="#accountModal">
      CRÉER UN COMPTE
    </button>
  </div>
</div>