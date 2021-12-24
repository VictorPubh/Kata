<?php

use Kata\StringMethods;

it('Codewars Test Recfactory StringMehtods::containsEnding', function () {
    $this->assertEquals(true, StringMethods::containsEnding("abc", "bc"));
    $this->assertEquals(true, StringMethods::containsEnding("ninja", "ja"));
    $this->assertEquals(true, StringMethods::containsEnding("sensei", "i"));

    $this->assertEquals(false, StringMethods::containsEnding("sumo", "omo"));
    $this->assertEquals(false, StringMethods::containsEnding("samurai", "ra"));
    $this->assertEquals(false, StringMethods::containsEnding("abc", "abcd"));
});

it('Codewars Test Recfactory StringMehtods::isPangram', function () {
    $this->assertEquals(true, StringMethods::isPangram("The quick brown fox jumps over the lazy dog."));
    $this->assertEquals(true, StringMethods::isPangram("Vi que ex-janota gordo fez show com playback."));

    $this->assertEquals(false, StringMethods::isPangram("Jovem ex-quenga picha frase da Blitz."));
    $this->assertEquals(false, StringMethods::isPangram("This is not a pangram."));
});
