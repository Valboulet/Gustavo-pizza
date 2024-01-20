<?php

namespace App\Model;

use DateTime;

class Orderline {

  private $quantity;
  private $order_id;
  private $pizza_price;
  private $extra_price;
  private $drink_price;
  private $pizza_name;
  private $extra_name;
  private $drink_name;
  private $date_order;

  
  public function getQuantity (): int
  {
    return $this->quantity;
  }

  public function getOrderId (): string 
  {
    return $this->order_id;
  }

  public function getPizzaName (): string 
  {
    return htmlspecialchars($this->pizza_name, ENT_NOQUOTES);
  }

  public function getExtraName(): ?string 
  {
    if ($this->extra_name !== null) {
      return htmlspecialchars($this->extra_name, ENT_NOQUOTES);
    } else {
      return $this->extra_name;
    }
  }

  public function getDrinkName(): ?string 
  {
    if ($this->drink_name !== null) {
      return htmlspecialchars($this->drink_name, ENT_NOQUOTES);
    } else {
      return $this->drink_name;
    }
  }

  public function getPizzaPrice (): string
  {
    return number_format($this->pizza_price, 2);
  }

  public function getExtraPrice(): ?string 
  {
    if ($this->extra_price !== null) {
      return number_format($this->extra_price, 2);
    } else {
      return $this->extra_price;
    }
  }

  public function getDrinkPrice(): ?string
  {
    if ($this->drink_price !== null) {
      return number_format($this->drink_price, 2);
    } else {
      return $this->drink_price;
    }
  }

  public function getDateOrder(): DateTime
  {
    return new DateTime($this->date_order);
  }


}

