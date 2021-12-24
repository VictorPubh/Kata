<?php

use Kata\StringMethods;

it('Codewars Test Recfactory', function () {
    $this->assertEquals(true, StringMethods::containsEnding("Samurai", "ai"));
    $this->assertEquals(false, StringMethods::containsEnding("sumo", "omo"));
    $this->assertEquals(true, StringMethods::containsEnding("ninja", "ja"));
    $this->assertEquals(true, StringMethods::containsEnding("sensei", "i"));
    $this->assertEquals(false, StringMethods::containsEnding("samurai", "ra"));
    $this->assertEquals(false, StringMethods::containsEnding("abc", "abcd"));
    $this->assertEquals(true, StringMethods::containsEnding("abc", "abc"));
    $this->assertEquals(true, StringMethods::containsEnding("abcabc", "bc"));
});
