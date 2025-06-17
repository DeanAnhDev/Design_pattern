<?php

use Theanh\DesignPattern\Structural\Facade\Facade;
use Theanh\DesignPattern\Structural\Facade\SubSystem1;
use Theanh\DesignPattern\Structural\Facade\SubSystem2;

require_once __DIR__ . '/../../../vendor/autoload.php';
function clientCode(Facade $facade)
{
    print($facade->operation());
}

$subSystem1 = new SubSystem1();
$subSystem2 = new SubSystem2();
$facade = new Facade($subSystem1, $subSystem2);
clientCode($facade);