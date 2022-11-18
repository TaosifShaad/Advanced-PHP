<?php

namespace Softzino\AdvancedPhp\Classes;

use Softzino\AdvancedPhp\Interface\Car;

class Audi implements Car
{
    public function move() {
        echo 'moving';
    }
}
