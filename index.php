<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

const BR = '<br> <br> <br>';

$bike = new Bicycle('red',1);
$bugatti = new Car('blue', 1, 'pedals');
$kammthaar = new Truck('white', 3, 'fuel', 10);
$marcel = new Truck('France3', 5, 'fuel', 2);


/*
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo BR;


// Car
var_dump(Car::ALLOWED_ENERGIES);

echo BR;

var_dump($bugatti);

echo BR;

echo $bugatti->forward();
echo '<br> Vitesse de la voiture : ' . $bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $bugatti->brake();
echo '<br> Vitesse de la voiture : ' . $bugatti->getcurrentSpeed() . ' km/h' . '<br>';
echo $bugatti->brake();
echo '<br>' . $bugatti->start();
echo '<br>' . $bugatti->brake();

echo BR;

// Truck // https://www.youtube.com/watch?v=NLPyySN9Czw&ab_channel=UltraVomit //

var_dump($kammthaar);

echo BR;

echo $kammthaar->isItFull();
echo BR;
echo $kammthaar->setLoad(8);
echo BR;
var_dump($kammthaar);
echo BR;
echo $kammthaar->isItFull();
echo BR;
echo $kammthaar->setLoad(12);
echo BR;
var_dump($kammthaar);
echo BR;

echo $marcel->forward();
echo '<br> Vitesse du camion : ' . $marcel->getcurrentSpeed() . ' km/h' . '<br>';
echo $marcel->brake();
echo '<br> Vitesse du camion : ' . $marcel->getcurrentSpeed() . ' km/h' . '<br>';
echo $marcel->brake();
*/
///// Highway tests /////

$route66 = new MotorWay ();
$abbeyRoad = new ResidentialWay();
$galleriaVittorioEmanueleII = new PedestrianWay();

echo BR;
$route66->addVehicle($bike);
echo BR;
$route66->addVehicle($bugatti);
echo BR;
$route66->addVehicle($kammthaar);
echo BR;
var_dump($route66->getCurrentVehicles());
echo BR;
$abbeyRoad->addVehicle($bike);
echo BR;
$abbeyRoad->addVehicle($bugatti);
echo BR;
$abbeyRoad->addVehicle($kammthaar);
echo BR;
var_dump($abbeyRoad->getCurrentVehicles());
echo BR;
$galleriaVittorioEmanueleII->addVehicle($bike);
echo BR;
$galleriaVittorioEmanueleII->addVehicle($bugatti);
echo BR;
$galleriaVittorioEmanueleII->addVehicle($kammthaar);
echo BR;
var_dump($galleriaVittorioEmanueleII->getCurrentVehicles());
