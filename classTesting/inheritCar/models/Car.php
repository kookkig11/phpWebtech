<?php
    require 'RaceCar.php';

    class Car {
        var $color;
        var $brand;

        function __construct($color, $brand){
            $this->color = $color;
            $this->brand = $brand;
        }

        function getColor(){
            return $this->color;
        }

        function getBrand(){
            return $this->brand;
        }
    }
?>