<?php

/**
 * Function display even numbers from 1 to 20
 *
 **/
function getEvenNumbers()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i . ' ';
        }
    }
}

try {
    getEvenNumbers();
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
