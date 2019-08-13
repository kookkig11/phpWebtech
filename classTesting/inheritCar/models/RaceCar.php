<?php
    require_once 'Car.php';
    
    class RaceCar extends Car {
        var $speed;

        function __construct($color, $brand, $speed){
            $this->speed = $speed;
            parent::__construct($color, $brand);
        }
    }
?>