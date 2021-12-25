<?php

use Kata\Auxiliary;

it('Auxiliary functions for Kata\'s StringMethods::lowerAndSplit', function () {
    $this->assertEquals(Auxiliary::lowerAndSplit('apple'), ['a', 'p', 'p', 'l', 'e']);
    $this->assertEquals(Auxiliary::lowerAndSplit('love'), ['l', 'o', 'v', 'e']);
});
