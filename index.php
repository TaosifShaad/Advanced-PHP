<?php

use Softzino\AdvancedPhp\Classes\{Employee, Furniture, Audi, John};

require_once 'vendor/autoload.php';

(new Furniture('chair')) -> setPosition("Office");

echo (new Employee()) -> isHurt(false).PHP_EOL;

(new Audi()) -> move();

echo((new John()) -> walk() -> see('birds'));
