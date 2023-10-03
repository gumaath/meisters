<?php
/**
 * Function checks if a numbers is prime or not.
 *
 * @param int $number The number to be verified
 * @return string The result message indicating whether the number is prime or not.
 * @throws TypeError If a non-integer value is provided.
 **/
function checkIsPrime($number = 0)
{
    if (!is_numeric($number)) {
      throw new TypeError("Only integers numbers allowed!");
    }

    // Converting string numerical to integer.
    $number = intval($number);

    // Verify if the number is not prime, if yes, return. (Early Return)
    if ($number % 2 === 0) {
        return "{$number} is not prime.";
    }

    return "{$number} is prime.";
}

try {
  $numberInput = readline("Write a number:");
  $result = checkIsPrime($numberInput);

  echo $result;
} catch (Error $e) {
  echo "Error: " . $e->getMessage() . PHP_EOL;
}

