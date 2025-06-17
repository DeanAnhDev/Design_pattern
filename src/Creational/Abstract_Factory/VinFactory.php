<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
interface VinFactory{
    public function createVinfast(): VinfastInterface;

    public function createVsmart(): VsmartInterface;
}