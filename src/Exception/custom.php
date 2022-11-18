<?php

class InvalidCCNumberException extends InvalidArgumentException {
    public function __construct($message = "No CC number", $code = 100, $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}

try {
    process();
} catch (InvalidCCNumberException $e) {
    echo $e;
}

function process($number = null, $zipCode = null) {
    try {
        validate($number, $zipCode);
    } catch (Exception $e) {
        throw $e;
    }
    echo 'processed';
}

function validate ($number, $zipCode) {
    if (is_null($zipCode)) {
        throw new InvalidCCNumberException();
    }
}