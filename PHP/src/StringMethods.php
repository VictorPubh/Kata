<?php

/**
 * Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).
 * 
 * Example:
 * 
 * StringMethods::containsEnding("abc", "bc"); // true
 * StringMethods::containsEnding("abc", "d");  // false 
 */

namespace Kata;

class StringMethods
{
    public $string;

    function __construct($str, $ending)
    {
        $this->containsEnding($str, $ending);
    }

    /**
     * ContainsEnding is case-sensitive
     * */
    public function containsEnding($str, $ending)
    {
        $str_length = strlen($str);
        $end_length = strlen($ending);
        $pos_ending = $str_length - $end_length;

        return substr($str, $pos_ending, $str_length) === $ending;
    }
}
