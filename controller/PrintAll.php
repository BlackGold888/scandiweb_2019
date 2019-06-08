<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 10:17
 */



class printAll
{
    public function printAllProduct(){
        $db = new Database();
        return $db->printAll();
    }
}