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
        $alphas = range('a', 'z');
        $phrase_letter = preg_replace("/[^a-zA-Z]+/", "", $phrase);
        $phrase_array = Auxiliary::lowerAndSplit($phrase_letter);

        foreach ($alphas as &$letter) {
            $letter = in_array($letter, $phrase_array);
        }

        foreach ($alphas as $letter) {
            if ($letter !== true) {
                return false;
            }
        }

        return true;
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
        $phrase_array = Auxiliary::lowerAndSplit($phrase, true);
        $letter_array = array();

        foreach ($phrase_array as $letter) {
            if (in_array($letter, $letter_array)) {
                return false;
            } else {
                array_push($letter_array, $letter);
            }
        }

        return true;
    }
}
