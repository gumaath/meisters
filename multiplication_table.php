<?php

/**
 * Function display multiplication table for the input number.
 *
 **/
function getMultiplicationTable($number)
{
    if (!is_numeric($number)) 
        throw new TypeError("Not a numeric value.");

    // Converting string number to integer.
    $number = intval($number);

    for ($i = 1; $i <= 10; $i++) { 
        $sum = $number * $i;
        $output = "%d x %d = %d \n\r";
        echo sprintf($output, $number, $i, $sum);
    }
}

try {
    $numberInput = readline("Enter a integer number: ");
    getMultiplicationTable($numberInput);
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
