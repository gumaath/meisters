<?php
/**
 * Function checks if a word is palindrome or not.
 *
 * @param int $number The word to be verified
 * @return string The result message indicating whether the word is palindrome or not.
 * @throws TypeError If a non-string value is provided.
 **/
function checkIsPalindrome($word = '')
{
    if (is_numeric($word)) {
      throw new TypeError("Only strings allowed!");
    } else if (preg_match('/ /', $word)) {
      throw new TypeError("Only one word allowed!");
    }


    // Verify if the word is a palindrome, if yes, return. (Early Return)
    if ($word == strrev($word)) {
        return "{$word} is a palindrome word.";
    }

    return "{$word} is not a palindrome word.";
}

try {
  $stringInput = readline("Write a single word:");
  $result = checkIsPalindrome($stringInput);

  echo $result;
} catch (Error $e) {
  echo "Error: " . $e->getMessage() . PHP_EOL;
}

