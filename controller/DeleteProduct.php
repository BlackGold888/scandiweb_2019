<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 22:23
 */


class DeleteProduct
{
    public function deleteProduct($arr){
        $delete = new Database();
        $delete->deleteProductSql($arr);
    }
}