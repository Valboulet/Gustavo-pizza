<?php

namespace App\Model;

class Recipe {

  private $pizza_id;
  private $ingredient_id;
  private $pizza_name;
  private $pizza_price;
  private $ingredients_names;

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
    return htmlspecialchars($this->pizza_name);
  }
  public function getPizzaPrice (): float
  {
    return $this->pizza_price;
  }
  public function getIngredientsNames (): string
  {
    return str_replace(',', ', ', htmlspecialchars($this->ingredients_names));
  }
  public function getPizzaFileName (): string 
  {
    return str_replace(' ', '-', mb_strtolower(htmlspecialchars($this->pizza_name)));
  }
}