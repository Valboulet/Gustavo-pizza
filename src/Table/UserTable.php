<?php

namespace App\Table;

use App\Model\User;
use PDO;

final class UserTable extends Table {

  protected $table = 'users';
  protected $class = User::class;
  protected $fetchMode = PDO::FETCH_CLASS;
  protected $fetchFunction = 'fetch';

  // Returns a user's data based on his email
  public function selectUserByEmail(string $email)
  {
    $this->sql = "SELECT * FROM {$this->table} WHERE email = :email";
    $this->param = ['email' => $email];
    return $this->getDatas();
  }
}