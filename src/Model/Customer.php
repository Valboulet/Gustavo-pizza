<?php

namespace App\Model;

class Customer {

    private $first_name;
    private $last_name;

    public function getFirstName(): string
    {
      return htmlspecialchars($this->first_name);
    }
  
    public function getLastName(): string
    {
      return htmlspecialchars($this->last_name);
    }
  


}


