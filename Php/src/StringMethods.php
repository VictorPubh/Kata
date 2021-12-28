<?php

namespace Kata;

use Kata\Auxiliary;

class StringMethods
{
    public $string;

    function __construct($str)
    {
        $this->string = $str;
    }

    /**
     * Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).
     * 
     * Example:
     * 
     * StringMethods::containsEnding("abc", "bc"); // true
     * StringMethods::containsEnding("abc", "d");  // false 
     * 
     * ContainsEnding is case-sensitive /!\
     * */

    public function containsEnding($word, $ending)
    {
        // your kata
    }

    /**
     * A pangram is a sentence that contains every single letter of the alphabet at least once. For example,
     * the sentence "The quick brown fox jumps over the lazy dog" is a pangram, because it uses the letters A-Z
     * at least once (case is irrelevant).
     * 
     * Given a string, detect whether or not it is a pangram. Return True if it is, False if not.Ignore numbers and punctuation.
     */

    public function isPangram($phrase)
    {
        // your kata
    }

    /**
     * An isogram is a word that has no repeating letters, consecutive or non-consecutive.
     * Implement a function that determines whether a string that contains only letters is an isogram.
     * Assume the empty string is an isogram. Ignore letter case.
     * 
     * "Dermatoglyphics" --> true
     * "aba" --> false
     * "moOse" --> false (ignore letter casing)
     */

    public function isIsogram($phrase)
    {
        // your kata
    }
}
