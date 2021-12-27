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

    function isRomanNumber(string $roman)
    {
        return preg_match(self::$regex_roman, $roman) > 0;
    }

    function decode()
    {
        $str = $this->string;

        if ($this->isRomanNumber($str)) {
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
}
