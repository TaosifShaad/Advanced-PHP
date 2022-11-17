<?php

namespace Softzino\AdvancedPhp\Trait;

trait Condition
{
    public function isHurt(bool $hurt): string {
        if (true === $hurt) {
            return 'Take the pet to the vet';
        }
        if (false === $hurt) {
            return 'Leave the pet and give it some food';
        }
    }
}
