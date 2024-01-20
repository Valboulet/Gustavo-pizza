<?php

namespace App\Model;

use DateTime;

class Order {

    private $id;
    private $date;
    private $hour;
    private $message;
    private $customer_id;
    private $firstname;
    private $lastname;


  public function getId(): string
  {
    return $this->id;
  }

  public function getHour(): string
  {
    return (new DateTime($this->hour))->format('H:i');
  }

  public function getMessage(): string 
  {
    return htmlspecialchars($this->message);
  }

  public function getFirstName(): string
  {
    return htmlspecialchars($this->firstname, ENT_NOQUOTES);
  }

  public function getLastName(): string
  {
    return htmlspecialchars($this->lastname, ENT_NOQUOTES);
  }

  public function getName(): string
  {
    return self::getFirstName() . ' ' . self::getLastName();
  }

  public function getInitials(): string
  {
    $initialsFirstName = substr(self::getFirstName(), 0, 1);
    $initialsLastName = substr(self::getLastName(), 0, 1);
    return strtoupper($initialsFirstName . $initialsLastName);
  }



}
