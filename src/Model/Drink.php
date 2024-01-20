<?php

namespace App\Model;

use DateTime;

class Drink {

  private $id;
  private $name;
  private $price;
  private $availability;
  private $date_order;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return htmlspecialchars($this->name, ENT_NOQUOTES);
  }
  public function setName(string $name): self
  {
    $this->name = htmlspecialchars($name, ENT_NOQUOTES);
    return $this;
  }

  public function getFormatName(): string
  {
    return lcfirst(str_replace(' ', '', ucwords(self::getName())));
  }

  public function getPrice(): string
  {
    return number_format($this->price, 2);
  }
  public function setPrice(float $price): self
  {
    $this->price = $price;
    return $this;
  }

  public function getAvailability(): int
  {
    return $this->availability;
  }
  public function setAvailability(int $availability): self
  {
    $this->availability = $availability;
    return $this;
  }

  public function getDateOrder(): DateTime
  {
    return new DateTime($this->date_order);
  }
}