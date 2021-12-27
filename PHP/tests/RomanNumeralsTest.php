<?php

use Kata\RomanNumerals;

it('Codewars Test Refactory RomanNumerals::decode', function () {
    $number_array = [1, 5, 98, 832, 23];
    # __ = ["I", "V", "XCVIII", "DCCCXXXII", "23"];

    $fill_array = array();

    foreach ($number_array as $number) {
        if (is_int($number)) {
            array_push($fill_array, RomanNumerals::encode($number));
        }
    }

    foreach ($fill_array as $key => $value) {
        $_ = new RomanNumerals($value);
        $this->assertEquals($number_array[$key], $_->decode());
        # $this->assertEquals($fill_array[$key], $__[$key]);
    }
});

it('Codewars Test Refactory RomanNumerals::encode', function () {
    $roman_array = ["M", "L", "IV", "MMXVII", "MCCCXXXVII"];
    # $__ = [100, 50, 9, 2017, 1337];

    $fill_array = array();

    foreach ($roman_array as $value) {
        if (RomanNumerals::isRomanNumber($value)) {
            $_ = new RomanNumerals($value);
            array_push($fill_array, $_->decode());
        }
    }

    foreach ($fill_array as $key => $value) {
        $this->assertEquals($roman_array[$key], RomanNumerals::encode($value));
        # $this->assertEquals($fill_array[$key], $__[$key]);
    }
});


it('Codewars Test Refactory RomanNumerals::decodeString', function () {
    $string_array = ["MD Chefe", "João XVIII", "Meu filho nasceu no século xxi"];
    // $__ = ["1500 Chefe", "João 18", "Meu filho nasceu no século 21"];

    $fill_array = array();

    foreach ($string_array as $value) {
        $_ = new RomanNumerals($value);
        array_push($fill_array, $_->decodeString());
    }

    foreach ($fill_array as $key => $value) {
        $this->assertEquals($string_array[$key], RomanNumerals::encodeString($value));
        # $this->assertEquals($fill_array[$key], $__[$key]);
    }
});


it('Codewars Test Refactory RomanNumerals::encodeString', function () {
    $string_array = ["João 2", "6 + 100 + 2"];
    # $__ = ["João II", "VI + C + II"];

    $fill_array = array();

    foreach ($string_array as $value) {
        array_push($fill_array, RomanNumerals::encodeString($value));
    }

    foreach ($fill_array as $key => $value) {
        $_ = new RomanNumerals($value);
        $this->assertEquals($string_array[$key], $_->decodeString());
        # $this->assertEquals($fill_array[$key], $__[$key]);
    }
});
