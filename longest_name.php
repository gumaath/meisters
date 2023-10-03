<?php

/**
 * Function find the longest name on a array.
 *
 * @param array $array The array to be searched.
 * @return string The result message indicating the longest name
 **/
function findLongestName($array = array())
{
    foreach ($array as $item) {
        if (!isset($longestName)) {
            $longestName = $item;
            continue;
        }

        if (strlen(trim($item)) > strlen(trim($longestName)))
            $longestName = $item;
    }

    $same_size = array_filter($array, function ($item) use ($longestName) {
        if (strlen(trim($item)) === strlen($longestName)) {
            return $item;
        };
    });

    if (count($same_size) > 1)
        return "The largest words are: " . implode(',', $same_size);
    else
        return "The largest word is: " . $longestName;
}

try {
    $array = array('Ricardo', 'Matheus', 'Lima', 'Parkinson', 'Gustavo');
    $result = findLongestName($array);

    echo $result;
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
