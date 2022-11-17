<?php

namespace Softzino\AdvancedPhp\Classes;

use Softzino\AdvancedPhp\Abstract\Human;

class John extends Human
{
    public function walk(): Human {
        echo 'walking'.PHP_EOL;

        return $this;
    }
}
