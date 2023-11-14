<?php

namespace App\Model;

class Recipe {

  private $ingredient_id;
  private $pizza_id;
  private $pizza_name;
  private $pizza_price;
  private $ingredients;

  public function getPizzaId (): int
  {
    return $this->pizza_id;
  }
  public function getIngredientId (): int
  {
    return $this->ingredient_id;
  }
  public function getPizzaName (): string
  {
    return $this->pizza_name;
  }
  public function getPizzaPrice (): float
  {
    return $this->pizza_price;
  }
  public function getIngredients (): string
  {
    return str_replace(',', ', ', $this->ingredients);
  }
  public function getFileName (): string 
  {
    return str_replace(' ', '-', mb_strtolower(htmlentities($this->pizza_name)));
  }

}

?>