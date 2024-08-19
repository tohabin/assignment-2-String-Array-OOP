<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // 1. Count the number of vowels in the string
    $vowelCount = preg_match_all('/[aeiou]/i', $string);

    // 2. Reverse the string
    $reversedString = strrev($string);

    // 3. Print the original string, the vowel count, and the reversed string in the specified format
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}