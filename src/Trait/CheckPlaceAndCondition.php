<?php

namespace Softzino\AdvancedPhp\Trait;

trait CheckPlaceAndCondition
{
    public function isHurt(bool $hurt): string {
        if (true === $hurt) {
            return 'Action needed';
        }
        if (false === $hurt) {
            return 'Not hurt, no action needed';
        }
    }

    public function where(string $str): bool {
        if ('Office' === $str) {
            return true;
        }
        if ('Office' !== $str) {
            return false;
        }
    }
}
