<?php

/**
 * Function display numbers from 10 to 1 in descending order
 *
 **/
function displayNumbersDescendingOrder()
{
    for ($i = 10; $i >= 1; $i--) {
        echo $i . ' ';
    }
}

try {
    displayNumbersDescendingOrder();
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
