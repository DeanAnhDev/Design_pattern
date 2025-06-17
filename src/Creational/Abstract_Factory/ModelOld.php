<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
class ModelOld implements VinFactory{

    public function createVinfast(): VinfastInterface {
        return new VinfastModelOld();
    }

    public function createVsmart(): VsmartInterface {
        return new VsmartModelOld();
    }
}