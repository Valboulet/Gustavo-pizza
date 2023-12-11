<?php

namespace App\Model;

class Cart {

  private $u_id;
  private $quantity;
  private $order_id;
  private $orderline_id;
  private $order_date_hour;
  private $o_id;
  private $ol_id;
  private $p_id;
  private $p_name;
  private $p_price;
  private $e_name;
  private $e_price;
  private $d_name;
  private $d_price;
  private $total_price;

  public function getQuantity (): int
  {
    return $this->quantity;
  }
  public function getOrderId (): int
  {
    return $this->order_id;
  }
  public function getOrderlineId (): int
  {
    return $this->orderline_id;
  }
  public function getOrderDateHour (): int
  {
    return $this->order_date_hour;
  }
  public function getOId (): int
  {
    return $this->o_id;
  }
  public function getOlId (): int
  {
    return $this->ol_id;
  }
  public function getPId (): int
  {
    return $this->p_id;
  }
  public function getPName (): string
  {
    return $this->p_name;
  }
  public function getPPrice (): float
  {
    return $this->p_price;
  }
  public function getEName (): ?string
  {
    return $this->e_name;
  }
  public function getEPrice (): ?float
  {
    return $this->e_price;
  }
  public function getDName (): ?string
  {
    return $this->d_name;
  }
  public function getDPrice (): ?float
  {
    return $this->d_price;
  }
  public function getTotalPrice (): float
  {
    return $this->total_price;
  }
  public function getUId (): int
  {
    return $this->u_id;
  }



}

?>