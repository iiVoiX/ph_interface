<?php

namespace PayPal\Validation;


    public static function validate($argument, $argumentName = null)
    {
        if (trim($argument) != null && !is_numeric($argument)) {
            throw new \InvalidArgumentException("$argumentName is not a valid numeric value");
        }
        return true;
    }
}
