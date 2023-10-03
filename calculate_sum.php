<?php

/**
 * Function calculate the sum of the elements on array
 * OBS: We can also use the sum() function.
 *
 * @param array $array The array to be calculated.
 * @return string The result message
 **/
function sumElements($array = array())
{
    $sum = 0;
    foreach ($array as $item) {
        if (!is_numeric($item))
            throw new ValueError("The array contains values which are not numerical.");

        $sum += $item;
    }

    return number_format($sum, 3, ',', '.');
}

try {
    $array = array(105, 99.5, 23.109, 30);
    $result = sumElements($array);

    echo $result;
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
