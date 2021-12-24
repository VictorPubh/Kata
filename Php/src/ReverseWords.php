<?php

/**
 * Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
 */

namespace Kata;

class ReverseWords
{
    public $phrase;

    function __construct($string)
    {
        $this->phrase = $this->apply($string);
    }

    public function apply($phrase)
    {
        $words = explode(" ", $phrase);
        foreach ($words as &$word) {
            $word = strrev($word);
        }

        return join(" ", $words);
    }
}
