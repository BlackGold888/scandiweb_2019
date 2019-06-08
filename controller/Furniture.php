<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 25.03.2019
 * Time: 17:11
 */

class Furniture extends Product
{
    private $height;
    private $width;
    private $length;


    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height)
    {
        $this->height = $height;
    }


    public function getWidth()
    {
        return $this->width;
    }


    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getLength()
    {
        return $this->length;
    }


    public function setLength($length)
    {
        $this->length = $length;
    }




}