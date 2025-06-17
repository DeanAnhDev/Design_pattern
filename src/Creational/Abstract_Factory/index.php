<?php

use Theanh\DesignPattern\Creational\Abstract_Factory\ModelNew;
use Theanh\DesignPattern\Creational\Abstract_Factory\ModelOld;
use Theanh\DesignPattern\Creational\Abstract_Factory\VinFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

function clientCode(VinFactory $factory) {
    $car = $factory->createVinfast();
    $phone = $factory->createVsmart();

    $car->showMap();
    $car->autoDriving();

    $phone->call();
    $phone->takePhoto();
}

echo "=== Dùng ModelNew ===\n";
clientCode(new ModelNew());

echo "\n=== Dùng ModelOld ===\n";
clientCode(new ModelOld());
