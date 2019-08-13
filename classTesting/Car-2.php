<?php
    class Car {}
    
        $car1 = new Car();
    $car1->color = "Black";
    var_dump($car1);
    echo "\n";
    print_r($car1);

    echo "\n------------\n";
    $car2 = new Car();
    var_dump($car2);
?>

<!--
output:
object(Car)#1 (1) {
  ["color"]=>
  string(5) "Black"
}

Car Object
(
    [color] => Black
)

------------
object(Car)#2 (0) {
}
-->