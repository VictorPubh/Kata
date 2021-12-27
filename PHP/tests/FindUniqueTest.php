<?php

use Kata\FindUnique;

it('Codewars Test Refactory', function () {
    $this->assertEquals(2, FindUnique::apply([1, 1, 1, 2, 1, 1]));
    $this->assertEquals(0.55, FindUnique::apply([0, 0, 0.55, 0, 0]));
    $this->assertEquals(1, FindUnique::apply([0, 1, 0]));
});
