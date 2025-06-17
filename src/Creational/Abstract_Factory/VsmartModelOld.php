<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
class VsmartModelOld implements VsmartInterface{

    public function call() {
        echo "Vsmart Old: gọi bình thường\n";
    }

    public function takePhoto() {
        echo "Vsmart Old: camera trung bình\n";
    }
}