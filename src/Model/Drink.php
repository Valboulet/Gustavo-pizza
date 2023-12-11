<?php

namespace App\Model;

class Drink {

  private $id;
  private $name;
  private $price;

  public function getName (): string 
  {
    return htmlspecialchars($this->name);
  }
  public function getPrice (): float 
  {
    return $this->price;
  }
  public function getId (): int
  {
    return $this->id;
  }

}

?>