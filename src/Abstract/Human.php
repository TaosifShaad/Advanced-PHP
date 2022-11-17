<?php

namespace Softzino\AdvancedPhp\Abstract;

abstract class Human
{
    public function see(string $content): string {
        echo '--> ';

        return 'watching'.$content;
    }

    abstract public function walk(): Human;
}
