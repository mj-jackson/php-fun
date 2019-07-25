<?php
namespace PHPFun;

final class Bootstrap {
    private $vendorDir = __DIR__ . '/vendor';

    function loadAutoload() {
        require($this->vendorDir . '/autoload.php');
        include 'config/appvars.php';
        include 'config/cache.php';
    }

    function setup() {
        $this->loadAutoload();
    }
}