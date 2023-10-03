<?php
/**
 * Function checks if a year is leap or not.
 *
 * @param int $year The year to be verified
 * @return string The result message indicating whether the year is leap or not.
 * @throws TypeError If a non-integer value is provided.
 **/
function checkIsPrime($year = 0)
{
    if (!is_numeric($year)) {
      throw new TypeError("Only integers numbers allowed!");
    }

    // Converting string numerical to integer.
    $year = intval($year);

    // Verify if the number is prime, if yes, return. (Early Return)
    if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400)) {
        return "{$year} is a leap year.";
    }

    return "{$year} is not a leap year.";
}

try {
  $yearInput = readline("Write a year:");
  $result = checkIsPrime($yearInput);

  echo $result;
} catch (Error $e) {
  echo "Error: " . $e->getMessage() . PHP_EOL;
}

