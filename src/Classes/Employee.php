<?php

namespace Softzino\AdvancedPhp\Classes;

use Softzino\AdvancedPhp\Trait\CheckPlaceAndCondition;
use Softzino\AdvancedPhp\Trait\Condition;

class Employee
{
    use CheckPlaceAndCondition, Condition {
        CheckPlaceAndCondition::isHurt insteadof Condition;
    }

    public string $name = 'Rafsan';

    public string $address = 'Dhaka';
}
