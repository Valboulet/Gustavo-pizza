<?php

namespace App\Table;

use App\Model\Orderline;
use PDO;

final class OrderlineTable extends Table {

  protected $table = 'orderlines';
  protected $class = Orderline::class;
  protected $fetchMode = PDO::FETCH_CLASS;
  protected $fetchFunction = 'fetchAll';

  // Returns drinks
  public function selectOrderlinesByDrinkId(int $drinkId): array
  {
    $this->sql = "SELECT drink_id FROM {$this->table} ORDER BY name";
    return $this->getDatas();
  }

  public function selectOrderlines(): array
  {
    $this->sql = 
      "SELECT p.name AS pizza_name, p.price AS pizza_price, 
        e.name AS extra_name, e.price AS extra_price, 
        d.name AS drink_name, d.price AS drink_price,
        quantity, order_id, o.date AS date_order
      FROM {$this->table} AS ol
      JOIN pizzas AS p ON p.id = pizza_id
      LEFT JOIN extras AS e ON e.id = extra_id
      LEFT JOIN drinks AS d ON d.id = drink_id
      JOIN orders AS o ON o.id = order_id
      WHERE o.date = CURDATE()
      ORDER BY pizza_name";
    return $this->getDatas();
  }
}