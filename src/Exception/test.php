<?php

try {
    process();
} catch (Exception $e) {
    echo $e->getMessage();
}

function process($number = null, $zipCode = null) {
    if (is_null($number)) {
        throw new Exception('No Credit Card Number', 2);
    }
    echo 'processed';
}
