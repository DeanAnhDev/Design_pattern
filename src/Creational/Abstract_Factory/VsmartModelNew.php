<?php
namespace Theanh\DesignPattern\Creational\Abstract_Factory;
class VsmartModelNew implements VsmartInterface{

    public function call() {
        echo "Vsmart New: cuộc gọi rõ nét\n";
    }

    public function takePhoto() {
        echo "Vsmart New: chụp ảnh chất lượng cao\n";
    }
}