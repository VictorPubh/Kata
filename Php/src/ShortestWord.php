<?php

/**
 * Simple, given a string of words, return the length of the shortest word(s).
 * String will never be empty and you do not need to account for different data types.
 * */

namespace Kata;

class ShortestWord
{
    public $larger;

    function __construct($string)
    {
        $larger = $this->apply($string);
    }

    public function apply($phrase)
    {
        $words = explode(" ", $phrase);
        $larger = strlen(
            $words[0]
        );

        foreach ($words as $word) {
            $length = strlen($word);

            if ($larger > $length) {
                $larger = $length;
            }
        }

        return $larger;
    }
}
