<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count Vowels
    $vowelCount = preg_match_all('/[aeiou]/i', $string);

    // Reverse String
    $reversedString = strrev($string);

    // Print Results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
