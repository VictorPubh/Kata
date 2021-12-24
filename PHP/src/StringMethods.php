<?php

namespace Kata;

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
        $word_length = strlen($word);
        $end_length = strlen($ending);
        $pos_ending = $word_length - $end_length;

        return substr($word, $pos_ending) === $ending;
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
        $phrase = strtolower($phrase);
        $phrase_array = str_split($phrase, 1);
        $alphas = range('a', 'z');

        foreach ($alphas as &$letter) {
            if (in_array($letter, $phrase_array)) {
                $letter = true;
            }
        }

        foreach ($alphas as $letter) {
            if ($letter !== true) {
                return false;
            }
        }

        return true;
    }
}
