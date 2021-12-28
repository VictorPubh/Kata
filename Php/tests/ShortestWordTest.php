<?php

use Kata\ShortestWord;

it('Codewars Test Refactory', function () {
    $this->assertEquals(3, ShortestWord::apply("bitcoin take over the world maybe who knows perhaps"));
    $this->assertEquals(3, ShortestWord::apply("turns out random test cases are easier than writing out basic ones"));
    $this->assertEquals(2, ShortestWord::apply("Let's travel abroad shall we"));
});
