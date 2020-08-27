<?php 
include_once "abs.php";

class digGoods extends absGoods {
    
    const price = 10;
    
    public function sum(){
        echo "Стоимость товара: ".self::price;
    }
}