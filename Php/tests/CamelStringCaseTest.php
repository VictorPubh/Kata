<?php

use Kata\CamelStringCase;

it('Codewars Test Refactory', function () {
    $this->assertEquals("camelCaseString", CamelStringCase::apply("camel_case_string"));
    $this->assertEquals("theStealthWarrior", CamelStringCase::apply("the-Stealth-Warrior"));
});
