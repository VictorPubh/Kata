<?php

namespace Kata;

class RomanNumerals
{
    public $string;
    public static $ref_roman = array(
        "I" => 1,
        "II" => 2,
        "III" => 3,
        "IV" => 4,
        "V" => 5,
        "VI" => 6,
        "VII" => 7,
        "VIII" => 8,
        "IX" => 9,
        "X" => 10,
        "XX" => 20,
        "XXX" => 30,
        "XL" => 40,
        "L" => 50,
        "LX" => 60,
        "LXX" => 70,
        "LXXX" => 80,
        "XC" => 90,
        "C" => 100,
        "CC" => 200,
        "CCC" => 300,
        "CD" => 400,
        "D" => 500,
        "DC" => 600,
        "DCC" => 700,
        "DCCC" => 800,
        "CM" => 900,
        "M" => 1000,
    );

    public static $regex_roman = '/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/';

    function __construct(string $str)
    {
        $this->string = $str;
    }

    /**
     * Responsible for checking if String is a Roman numeral.
     */
    function isRomanNumber(string $roman)
    {
        return preg_match(self::$regex_roman, $roman) > 0;
    }

    /**
     * Responsible for decoding only one word, based on the instance's String.
     */
    function decode()
    {
        $str = $this->string;

        if ($this->isRomanNumber($str) || $this->isRomanNumber(strtoupper($str))) {
            $number = 0;
            $ref = array_reverse(self::$ref_roman);

            foreach ($ref as $roman => $int) {
                while (strpos($str, $roman) === 0) {
                    $number += $int;
                    $str = substr($str, strlen($roman));
                }
            }

            return $number;
        } else {
            return false;
        }
    }

    /**
     * Responsible for encoding, based on a received Integer parameter.
     */
    function encode(int $number)
    {
        if (is_int($number)) {
            $ref = array_reverse(self::$ref_roman);
            $value = "";
            while ($number > 0) {
                foreach ($ref as $roman => $int) {
                    if ($number >= $int) {
                        $number -= $int;
                        $value .= $roman;
                        break;
                    }
                }
            }
            return $value;
        } else {
            return false;
        }
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

        foreach ($str_explode as &$word) {
            if ($this->isRomanNumber($word)) {
                $romans = new RomanNumerals($word);
                $word = $romans->decode();
            }
        }

        return implode(" ", $str_explode);
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
        $str_explode = explode(" ", $str);

        foreach ($str_explode as &$word) {
            $word_int = intval($word);
            if ($word_int) {
                $word = RomanNumerals::encode($word_int);
            }
        }

        return implode(" ", $str_explode);
    }
}
