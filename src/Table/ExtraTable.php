<?php

namespace App\Table;

use App\Model\Extra;
use PDO;

final class ExtraTable extends Table {

  protected $table = 'extras';
  protected $class = Extra::class;
  protected $fetchMode = PDO::FETCH_CLASS;
  protected $fetchFunction = 'fetchAll';

  // Returns extras
  public function selectExtras()
  {
    $this->sql = "SELECT name, price FROM {$this->table} ORDER BY name";
    return $this->getDatas();
  }
}