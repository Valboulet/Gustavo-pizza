<?php

namespace App\Table;

use App\Model\Drink;
use PDO;

final class DrinkTable extends Table {

  protected $table = 'drinks';
  protected $class = Drink::class;
  protected $fetchMode = PDO::FETCH_CLASS;
  protected $fetchFunction = 'fetchAll';

  // Returns drinks client-side
  public function selectAvailableDrinks(): array
  {
    $this->sql = "SELECT * FROM {$this->table} WHERE availability = :availability ORDER BY name";
    $this->param = ['availability' => 1];
    return $this->getDatas();
  }

  // Returns drinks admin-side
  public function selectDrinks(): array
  {
    $this->sql = "SELECT * FROM {$this->table} ORDER BY name";
    return $this->getDatas();
  }
  
  // Returns linked and unliked drinks to an order
  public function selectDrinksLinkedToday(): array
  {
    $this->sql = 
      "SELECT d.id, o.date AS date_order
      FROM {$this->table} AS d 
      JOIN orderlines AS ol ON ol.drink_id = d.id
      JOIN orders AS o ON o.id = ol.order_id
      WHERE o.date = CURDATE()
      GROUP BY d.id, o.date";
    return $this->getDatas();
  }

  public function selectDrinkById(int $id)
  {
    $this->sql = "SELECT id, price, availability FROM {$this->table} WHERE id = :id";
    $this->param = ['id' => $id];
    $this->fetchFunction = 'fetch';
    return $this->getDatas();
  }

  // Update drink 
  public function updateDrink(Drink $drink): void
  {
    $this->sql = "UPDATE {$this->table} SET price = :price, availability = :availability WHERE id = :id";
    $this->param = [
      'id' => $drink->getId(),
      'price' => $drink->getPrice(),
      'availability' => $drink->getAvailability()
    ];
    $this->manageDatas();
  }

  // Insert/create drink
  public function createDrink(Drink $drink): void
  {
    $this->sql = "INSERT INTO {$this->table} SET name = :name, price = :price, availability = :availability";
    $this->param = [
      'name' => $drink->getName(),
      'price' => $drink->getPrice(),
      'availability' => $drink->getAvailability()
    ];
    $this->manageDatas();
  }

  // Delete drink
  public function deleteDrink(int $id): void
  {
    $this->sql = "DELETE FROM {$this->table} WHERE id = :id AND availability = :availability";
    $this->param = [
      'id' => $id,
      'availability' => 0
    ];
    $this->manageDatas();
  }
}

