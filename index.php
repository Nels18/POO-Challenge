<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$truck = new Truck('blue', 3, 'fuel', 50);

echo $truck->getLoading();
echo $truck->isFull();

$truck->setLoading(30);
echo $truck->getLoading();
echo $truck->isFull();

$truck->setLoading(50);
echo $truck->getLoading();
echo $truck->isFull();

$truck->setLoading(80);
echo $truck->getLoading();
echo $truck->isFull();

echo $truck->forward();
echo $truck->brake();
