<?php


class Car {
    public function carColor(){
        echo "Car color";
    }
    public function carBrand(){
        echo "Car brand";
    }
}

class Color Extends Car {
    public function carColor(){
        echo "Red";
    }
}

class Brand Extends Car {
    public function carBrand(){
        echo "Toyota";
    }
}
$car = new Car;
$color = new Color;
$brand = new Brand;

$car->carBrand();
echo PHP_EOL;
$color->carColor();
echo PHP_EOL;
$brand->carBrand();
