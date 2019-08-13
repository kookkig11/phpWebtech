<?php
    class Car {
        var $color;
        var $brand;

        function __construct($color, $brand){
            $this->color = $color;
            $this->brand = $brand;
        }

        function setColor($color) {
            $this->color = $color;
        }

        function setBrand(){
            $this->brand = $brand;    
        }

        function getColor(){
            return $this->color;
        }

        
        function getBrand(){
            return $this->brand;
        }
    }
    /*
    $car1 = new Car();
    $car2 = new Car;
    // class ไม่จำเป็นต้องมี () ในการเรียกก็ได้
    */
    
    $car1 = new Car("Black", "Ford");
    $car2 = new Car("Green", "Toyota");

    var_dump($car1);
    echo "\n";
    var_dump($car2);
    echo "\n";

    var_dump($car1->getColor());
    var_dump($car1->getBrand());
    echo "\n";

    echo $car1->getColor() . "\n";
    echo $car2->getColor() . "\n";
?>
<!--
output:
object(Car)#1 (2) {
  ["color"]=>
  string(5) "Black"
  ["brand"]=>
  string(4) "Ford"
}

object(Car)#2 (2) {
  ["color"]=>
  string(5) "Green"
  ["brand"]=>
  string(6) "Toyota"
}

string(5) "Black"
string(4) "Ford"

Black
Green
-->