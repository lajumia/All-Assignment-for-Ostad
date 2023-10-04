
<?php

class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price; 
    }


    // TODO: Add getFormattedPrice method

    public function getFormattedPrice(){
        $price = sprintf("$%s",$this->price);
        return $price;

    }


    // TODO: Add showDetails method
    public function showDetails(){

        echo "ID : ".$this->id;
        echo "<br>";
        echo "Name : ".$this->name;
        echo "<br>";
        echo "Price : ".$this->getFormattedPrice();

    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

?>
