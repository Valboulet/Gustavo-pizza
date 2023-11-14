<?php

namespace App\Model;

class Pizza {

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