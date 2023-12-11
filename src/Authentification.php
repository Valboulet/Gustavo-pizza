<?php

namespace App;

class Authentification {

  public static function verifyRoles(string $role)
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    if (!isset($_SESSION['user']) || !isset($_SESSION['role'])) {
      throw new SessionException();
    } else {
      
      if ($_SESSION['role'] === $role) {
        return true;
      } else {
        return false;
      }
    }
  }
}