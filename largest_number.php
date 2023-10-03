<?php

/**
 * Function find the largest number on a array.
 * OBS: We can also use the max() function.
 *
 * @param array $array The array to be searched.
 * @return string The result message indicating the largest number
 **/
function findLargestNumber($array = array())
{
    foreach ($array as $item) {
        if (!isset($largestNumber)) {
            $largestNumber = $item;
            continue;
        }

        if ($item > $largestNumber)
            $largestNumber = $item;
    }
    return $largestNumber;
}

try {
    $array = array(5, 9, 100, 1022, -90, 93, 28, 50, 32, 1011);
    $result = findLargestNumber($array);

    echo $result;
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
