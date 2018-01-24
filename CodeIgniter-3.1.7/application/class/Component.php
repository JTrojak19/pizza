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


    public function bigPizza()
    {
        $this->price *= 2;
    }
}