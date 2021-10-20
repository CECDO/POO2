<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();

$car = new Car('green', 4, 'electric');
echo $car->forward();

$truck = new Truck('yellow', 3, 'fuel', 500);
echo $truck->forward();
