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

    public function __construct()
    {
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
}