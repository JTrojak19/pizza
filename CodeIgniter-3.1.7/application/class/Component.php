<?php
/**
 * Created by PhpStorm.
 * User: joasi
 * Date: 24.01.2018
 * Time: 18:22
 */

class Component
{
    public $id;
    public $name;
    public $price;

    public function __construct($name = null, $price = null)
    {
        if (!isset($this -> name) && $name != null)
        {
            $this ->name = $name;
        }
        if (!isset($this -> price) && $name != null)
        {
            $this -> price = $price;
        }
        $this->updatePrice();

    }

    private function updatePrice()
    {
        $this-> price /= 100;
    }

    public function bigPizza()
    {
        $this->price *= 2;
    }
    public function isValid()
    {
        return $this -> name !== null && $this -> price !== null;
    }
}