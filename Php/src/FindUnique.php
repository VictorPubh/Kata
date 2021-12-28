<?php

namespace Kata;

class FindUnique
{
    public $array;

    function __construct($array)
    {
        $this->array = $this->apply($array);
    }

    function apply($array_numbers)
    {
        $current = array_shift($array_numbers);

        foreach ($array_numbers as $item_number) {
            if ($current !== $item_number) {
                return $item_number;
            }
        }
    }
}
