<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 1:43
 */

class AddProduct
{
    public $message = "";
public function addDisc(Product $arr){
    $addDisc = new Database();
    if ($addDisc->checkProduct($arr) > 0) {
        return $this->message = "<div class=\"alert alert-danger\">
  <strong>SKU</strong> for your product is exist. Sku for product must be unique.
</div>";
    }else{
        $addDisc->addDisc($arr);
        return $this->message = "<div class=\"alert alert-success\">
  <strong>Success!</strong> Your product is added.
</div>";

    }
}

public function addBook(Product $arr)
{
    $addBook = new Database();
    if ($addBook->checkProduct($arr) > 0) {
        return $this->message = "<div class=\"alert alert-danger\"><strong>SKU</strong> for your product is exist. Sku for product must be unique.</div>";
    } else {
        $addBook->addBook($arr);
        return $this->message = "<div class=\"alert alert-success\"><strong>Success!</strong> Your product is added.</div>";
    }

}
public function addFurniture(Product $arr){
    $addFurniture = new Database();
    if ($addFurniture->checkProduct($arr)>0) {
        return $this->message = "<div class=\"alert alert-danger\"><strong>SKU</strong> for your product is exist. Sku for product must be unique.</div>";
    } else {
        $addFurniture->addFurniture($arr);
        return $this->message = "<div class=\"alert alert-success\"><strong>Success!</strong> Your product is added.</div>";
    }
}

}