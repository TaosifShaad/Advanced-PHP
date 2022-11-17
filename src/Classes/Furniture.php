<?php

namespace Softzino\AdvancedPhp\Classes;

use Softzino\AdvancedPhp\Trait\CheckPlaceAndCondition;

class Furniture
{
    use CheckPlaceAndCondition;

    public int $number = 5;
    public string $position = 'Office';

    public function __construct(public string $category) {
        $this->category = $category;
    }

    public function setPosition(string $position): void {
        $this->position = $position;
        echo 'Position Set'.PHP_EOL;
    }
}
