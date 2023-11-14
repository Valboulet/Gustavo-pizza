<?php

namespace App\Model;

class Order {

    private $id;
    private $date_hour;
    private $cart_quantity;

  public function getId (): int 
  {
    return $this->id;
  }

  public function getTime (): string
  {
    return $this->date_hour;
  }
  public function getCartQuantity(): string
  {
    return $this->cart_quantity;
  }



}

?>