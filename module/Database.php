
<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 22.03.2019
 * Time: 1:42
 */

class Database
{
    public $conn;
public $data;
    public function __construct()
    {
        $this->conn = new mysqli(HOST,USER,PASS,DB);
        if (!$this->conn) {
            exit('No connection with db');
        } elseif (!mysqli_select_db($this->conn, DB)) {
            exit('Can not select db');
        }
    }

    public function printAll(){
       $sql = $this->conn->query("SELECT * FROM product");
        for ($i = 0; $i < $sql->num_rows; $i++) {
            $this->data[] = $sql->fetch_assoc();
        }
        return $this->data;
    }

    public function deleteProductSql($arr){
        foreach ($arr as $item) {
            $this->conn->query("DELETE FROM scandiweb.product WHERE sku='$item'");
        }
    }

    public function checkProduct(Product $arr){
        return $this->conn->query("SELECT * FROM product WHERE sku='{$arr->getSku()}'")->num_rows;
    }

    public function addDisc(Disc $arr){
        $res = $this->conn->query("INSERT INTO product (id, sku, name, price, size, weight, height, width, length, type) VALUES (NULL, '{$arr->getSku()}', '{$arr->getName()}', '{$arr->getPrice()}', '{$arr->getSize()}', NULL, NULL, NULL, NULL, 'disc')");
        if (!$res) {
            echo "Query is wrong";
        }
    }
    public function addBook(Book $arr){
        $res = $this->conn->query("INSERT INTO product (id, sku, name, price, size, weight, height, width, length, type) VALUES (NULL, '{$arr->getSku()}', '{$arr->getName()}', '{$arr->getPrice()}', NULL , {$arr->getWeight()}, NULL, NULL, NULL, 'book')");
        if (!$res) {
            echo "Query is wrong";
        }
    }
    public function addFurniture(Furniture $arr){
        $res = $this->conn->query("INSERT INTO product (id, sku, name, price, size, weight, height, width, length, type) VALUES (NULL, '{$arr->getSku()}', '{$arr->getName()}', '{$arr->getPrice()}', NULL , NULL , {$arr->getHeight()},{$arr->getWidth()}, {$arr->getLength()}, 'furniture')");
        if (!$res) {
            echo "Query is wrong";
        }
    }
}