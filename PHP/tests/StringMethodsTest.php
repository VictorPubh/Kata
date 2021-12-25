<?php

use Kata\StringMethods;

it('Codewars Test Refactory StringMethods::containsEnding', function () {
    $this->assertEquals(true, StringMethods::containsEnding("abc", "bc"));
    $this->assertEquals(true, StringMethods::containsEnding("ninja", "ja"));
    $this->assertEquals(true, StringMethods::containsEnding("sensei", "i"));

    $this->assertEquals(false, StringMethods::containsEnding("sumo", "omo"));
    $this->assertEquals(false, StringMethods::containsEnding("samurai", "ra"));
    $this->assertEquals(false, StringMethods::containsEnding("abc", "abcd"));
});

it('Codewars Test Refactory StringMethods::isPangram', function () {
    $this->assertEquals(true, StringMethods::isPangram("The quick brown fox jumps over the lazy dog."));
    $this->assertEquals(true, StringMethods::isPangram("Vi que ex-janota gordo fez show com playback."));

    $this->assertEquals(false, StringMethods::isPangram("Jovem ex-quenga picha frase da Blitz."));
    $this->assertEquals(false, StringMethods::isPangram("This is not a pangram."));
});

it('Codewars Test Refactory StringMethods::isIsogram', function () {
    $this->assertEquals(true, StringMethods::isIsogram("Dermatoglyphics"));
    $this->assertEquals(true, StringMethods::isIsogram("isogram"));
    $this->assertEquals(false, StringMethods::isIsogram("aba"), "same chars may not be adjacent");
    $this->assertEquals(false, StringMethods::isIsogram("moOse"), "same chars may not be same case");
    $this->assertEquals(false, StringMethods::isIsogram("isIsogram"));
    $this->assertEquals(true, StringMethods::isIsogram(""), "an empty string is a valid isogram");
});
