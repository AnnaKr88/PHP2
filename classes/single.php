<?php 
include_once "abs.php";

class singleGoods extends absGoods {
    
    
    public function sum(){
        echo "Стоимость товара: ".digGoods::price*2;
    }
}