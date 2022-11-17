<?php

function fizzBuzz(int $length) {
    $res = null;
    $i = 0;
    while ($i < $length) {
        if (0 === $i % 3 && 0 === $i % 5) {
            yield 'fizzBuzz';
        } elseif (0 == $i % 3) {
            yield 'fizz';
        } elseif (0 == $i % 5) {
            yield 'Buzz';
        } else {
            yield 'not fizz not buzz';
        }
        $i++;
    }
}

foreach (fizzBuzz(30) as $key => $value) {
    echo $key.' --> '.$value.PHP_EOL;
}
