<?php

use Kata\RomanNumerals;

it('Codewars Test Refactory RomanNumerals::decode', function () {
    $number_array = [1, 5, 98, 832, 23];
    $fill_array = array();

    foreach ($number_array as $number) {
        if (is_int($number)) {
            array_push($fill_array, RomanNumerals::encode($number));
        }
    }

    foreach ($fill_array as $key => $value) {
        $_ = new RomanNumerals($value);
        $this->assertEquals($number_array[$key], $_->decode());
    }
});

it('Codewars Test Refactory RomanNumerals::encode', function () {
    $roman_array = ["M", "L", "IV", "MMXVII", "MCCCXXXVII"];
    $fill_array = array();

    foreach ($roman_array as $value) {
        if (RomanNumerals::isRomanNumber($value)) {
            $_ = new RomanNumerals($value);
            array_push($fill_array, $_->decode());
        }
    }

    foreach ($fill_array as $key => $value) {
        $this->assertEquals($roman_array[$key], RomanNumerals::encode($value));
    }
});
