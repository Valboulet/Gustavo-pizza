<?php

namespace App\Model;

class User {

  protected $id;
  protected $email;
  protected $password;
  protected $role;

  public function getId(): string
  {
    return $this->id;
  }

  public function getEmail(): string
  {
    return htmlspecialchars($this->email);
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function getRole(): string
  {
    return $this->role;
  }
}