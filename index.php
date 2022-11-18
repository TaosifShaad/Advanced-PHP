<?php

use Softzino\AdvancedPhp\Classes\{Employee, Furniture, Audi, John};

use function Softzino\AdvancedPhp\Generator\fizzBuzz;

require_once 'vendor/autoload.php';

//Traits

(new Furniture('chair')) -> setPosition("Office");

echo (new Employee()) -> isHurt(false).PHP_EOL;

//Interface

(new Audi()) -> move();

//Abstract class

echo((new John()) -> walk() -> see('birds'));

//generator function

foreach (fizzBuzz(30) as $key => $value) {
    echo $key.' --> '.$value.PHP_EOL;
}
