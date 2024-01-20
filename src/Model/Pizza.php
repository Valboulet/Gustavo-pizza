<?php

namespace App\Model;

class Pizza {

    private $id;
    private $name;
    private $price;

    public function getName (): string 
    {
        return htmlspecialchars($this->name);
    }
    public function getPrice (): string 
    {
        return number_format($this->price, 2);
    }
    public function getFileName (): string 
    {
        return str_replace(' ', '-', mb_strtolower(self::getName()));
    }

}

?>