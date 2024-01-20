<?php

namespace App\Model;

class Extra {

  private $id;
  private $name;
  private $price;

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return htmlspecialchars($this->name);
  }
  public function getFormatName(): string
  {
    return lcfirst(str_replace([' ', 'é'], ['', 'e'], ucwords(self::getName())));
  }
  
  public function getPrice(): string
  {
    return number_format($this->price, 2);
  }
}