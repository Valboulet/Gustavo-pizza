<?php

namespace App\Model;

class Orderline {

  private $id;

  private $pizza_price;

  private $extra_price;

  private $drink_price;

  private $pizza_name;

  private $extra_name;

  private $drink_name;

  private $total_price;

  public function getPizzaName (): ?string 
  {
    return $this->pizza_name;
  }
  public function getExtraName(): ?string 
  {
    return $this->extra_name;
  }
  public function getDrinkName(): ?string 
  {
    return $this->drink_name;
  }
  public function getPizzaPrice (): float 
  {
    return $this->pizza_price;
  }
  public function getExtraPrice(): ?float 
  {
    return $this->extra_price;
  }
  public function getDrinkPrice(): ?float 
  {
    return $this->drink_price;
  }
  public function getTotalPrice(): ?float
  {
    return $this->total_price;
  }



}

?>