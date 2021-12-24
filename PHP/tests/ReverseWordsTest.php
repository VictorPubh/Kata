<?php

use Kata\ReverseWords;

it('Codewars Test Refactory', function () {
    $this->assertEquals('ehT kciuq nworb xof spmuj revo eht yzal .god', ReverseWords::apply('The quick brown fox jumps over the lazy dog.'));
    $this->assertEquals('elppa', ReverseWords::apply('apple'));
    $this->assertEquals('a b c d', ReverseWords::apply('a b c d'));
    $this->assertEquals('elbuod  decaps  sdrow', ReverseWords::apply('double  spaced  words'));
    $this->assertEquals('desserts stressed', ReverseWords::apply('stressed desserts'));
    $this->assertEquals('olleh olleh', ReverseWords::apply('hello hello'));
});
