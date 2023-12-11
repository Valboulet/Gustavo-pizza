<?php

namespace App\Model;

class Extra {

  private $id;
  private $name;
  private $price;

  public function getName (): string {
    return $this->name;
  }
  public function getPrice (): float {
    return $this->price;
  }

}

?>