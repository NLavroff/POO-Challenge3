<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'LightableInterface.php';

$motorWay = new MotorWay;
$pedestrianWay = new PedestrianWay;
$residentialWay = new ResidentialWay;

var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentialWay);

$car            = new Car('verte', 5, 'électrique');
$skateboard     = new Skateboard("rouge", 1);
$bicycle        = new Bicycle('jaune', 2);
$truck          = new Truck('bleu', 6, 'essence', 0);

echo "Véhicules ajoutés sur MotorWay : " . "<br>";
$motorWay->addVehicle($bicycle);
$motorWay->addVehicle($car);
$motorWay->addVehicle($skateboard);
$motorWay->addVehicle($truck);
var_dump($motorWay->getCurrentVehicles());

echo "Véhicules ajoutés sur PedestrianWay : " . "<br>";
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($skateboard);
$pedestrianWay->addVehicle($truck);
var_dump($pedestrianWay->getCurrentVehicles());

echo "Véhicules ajoutés sur ResidentialWay : " . "<br>";
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($truck);
var_dump($residentialWay->getCurrentVehicles());

echo "frein à main :";
var_dump($car->getHasParkBrake());
$car->setParkBrake(true);
var_dump($car->getHasParkBrake());

try {
    $car->start();
} catch (Exception $e) {
    echo "Exception received :  " . $e . "n";
} finally {
    echo "Ma voiture roule comme un donut";
}
var_dump($bicycle->switchOn());