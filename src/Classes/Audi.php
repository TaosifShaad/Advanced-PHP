<?php

namespace Softzino\AdvancedPhp\Classes;

use Softzino\AdvancedPhp\Interface\Car;

// require_once '../../vendor/autoload.php';

class Audi implements Car
{
    public function move() {
        echo 'moving';
    }
}
