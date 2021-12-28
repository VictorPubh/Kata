<?php

namespace Kata;

class RomanNumerals
{
    public $string;

    function __construct(string $str)
    {
        $this->string = $str;
    }

    /**
     * Responsible for checking if String is a Roman numeral.
     */
    public function isRomanNumber(string $word)
    {
        // your kata
    }

    /**
     * Responsible for decoding only one word, based on the instance's String.
     */
    function decode()
    {
        $str = $this->string;
        // your kata
    }

    /**
     * Responsible for encoding, based on a received Integer parameter.
     */
    function encode(int $number)
    {
        // your kata
    }

    /**
     * Responsible for decoding a sentence that contains Roman numerals, based on the instance's String.
     * 
     * Example:
     * 
     * $roman = new RomanNumerals("João XVIII");
     * $roman->decodeString(); // João 18
     */
    function decodeString()
    {
        $str_explode = explode(" ", $this->string);
        // your kata
    }

    /**
     * Responsible for encoding a phrase that contains numbers, based on the String received via Parameter.
     * 
     * Example:
     * 
     * RomanNumerals::encodeString("2500 years after the War."); // MD years after the War.
     */

    function encodeString(string $str)
    {
        // your kata
    }
}
