<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 25.03.2019
 * Time: 16:30
 */

class Product
{
    private $sku;
    private $name;
    private $price;

// Set Property
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
   public function setPrice($price)
    {
        $this->price = $price;
    }

    //Get property
    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function getSku()
    {
        return $this->sku;
    }
}