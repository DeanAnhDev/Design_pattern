<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
class VinfastModelNew implements VinfastInterface{

    public function showMap() {
        echo "Vinfast New: hiển thị bản đồ hiện đại\n";
    }

    public function autoDriving() {
        echo "Vinfast New: chế độ tự lái\n";
    }
}