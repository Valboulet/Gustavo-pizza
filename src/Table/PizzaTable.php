<?php

namespace App\Table;

use App\Model\Pizza;
use PDO;

final class PizzaTable extends Table {

    protected $table = 'pizzas';
    protected $class = Pizza::class;
    protected $fetchMode = PDO::FETCH_CLASS;
    protected $fetchFunction = 'fetchAll';
  
  // Returns pizzas
  public function selectPizzas()
  {
    $this->sql = "SELECT name, price FROM {$this->table} ORDER BY name";
    return $this->getDatas();
  }


}