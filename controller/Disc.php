<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 25.03.2019
 * Time: 16:33
 */

class Disc extends Product
{
    private $size;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}