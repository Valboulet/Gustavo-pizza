<?php

namespace App\Table;

use App\Model\Recipe;
use PDO;

final class RecipeTable extends Table {

  protected $table = 'recipes';
  protected $class = Recipe::class;
  protected $fetchMode = PDO::FETCH_CLASS;
  protected $fetchFunction = 'fetchAll';

  // Returns pizzas with the ingredients
  public function selectPizzasWithIngredients()
  {
    $this->sql = 
      "SELECT p.name AS pizza_name, p.price AS pizza_price, GROUP_CONCAT(i.name) AS ingredients_names
      FROM {$this->table}
      JOIN pizzas AS p ON p.id = {$this->table}.pizza_id 
      JOIN ingredients AS i ON i.id = {$this->table}.ingredient_id 
      GROUP BY pizza_name, pizza_price";
    return $this->getDatas();
  }
}