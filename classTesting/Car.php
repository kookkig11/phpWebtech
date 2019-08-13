<?php
    class Car {}
    
    $car1 = new Car();
    $car2 = new Car;
    // class ไม่จำเป็นต้องมี () ในการเรียกก็ได้

    var_dump($car1);
    var_dump($car2);

    // output:
    // object(Car)#1 (0) {
    // }
    // object(Car)#2 (0) {
    // }
?>