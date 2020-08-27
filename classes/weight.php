<?php 
include_once "abs.php";

class weightGoods extends absGoods {
    
    private $price;
    private $amount;
    
    public function __construct($price, $amount){
        $this->price = $price;
        $this->amount = $amount;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getAmount(){
        return $this->amount;
    }
    
    
    public function sum(){
        echo "Стоимость товара: ".$this->price. ". Количество: ".$this->amount.". Общая стоимость: ".$this->price*$this->amount.".";
    }
}