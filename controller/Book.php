<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 25.03.2019
 * Time: 16:55
 */

class Book extends Product
{
    private $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

}