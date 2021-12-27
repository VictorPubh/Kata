<?php

use Kata\WeirdStringCase;

it('Codewars Test Refactory', function () {
    $this->assertEquals('HeLlO WoRlD FoO BaR BaZ', WeirdStringCase::apply('Hello world foo bar baz'));
    $this->assertEquals('WeLl I GuEsS YoU PaSsEd', WeirdStringCase::apply('wEll i GuesS you passed'));
    $this->assertEquals('EsToU CoM FoMe!', WeirdStringCase::apply('Estou com Fome!'));
});
