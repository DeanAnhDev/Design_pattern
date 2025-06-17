<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
class VinfastModelOld implements VinfastInterface{

    public function showMap() {
        echo "Vinfast Old: chỉ hỗ trợ bản đồ cơ bản\n";
    }

    public function autoDriving() {
        echo "Vinfast Old: không hỗ trợ tự lái\n";
    }
}