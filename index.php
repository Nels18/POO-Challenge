<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$car = new Car('Red', 5, 'gasoline');
var_dump($bike, $car);

$bike->setCurrentSpeed(0);
$car->start();
var_dump($bike, $car);

echo '<br>';
echo 'Le vélo accélère : ' . $bike->forward() . '<br>';
echo 'La voiture accélère : ' . $car->forward() . '<br>';
echo '<br>';

echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

echo 'Le vélo freine :' . $bike->brake() . '<br>';
echo '<br>';
echo 'La voiture freine : ' . $car->brake() . '<br>';
echo '<br>';

echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo 'Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';

var_dump($bike, $car);
