<?php

try {
    process();
} catch (Exception $e) {
    echo $e -> getPrevious() . PHP_EOL;
    echo $e;
}

function process($number = null, $zipCode = null) {
    try {
        validate($number, $zipCode);
    } catch (Exception $e) {
        throw new Exception('No CC Number', 9, $e);
    }
    echo 'processed';
}

function validate ($number, $zipCode) {
    if (is_null($zipCode)) {
        throw new Exception('Invalid Zip Code', 9);
    }
}