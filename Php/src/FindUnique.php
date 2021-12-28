<?php

namespace Kata;

/**
 * Considering that an array always has 3 or more indexes,
 * make a filter capable of returning only the result different
 * from the others.
 * 
 * findUniq([ 1, 1, 1, 2, 1, 1 ]); // 2
 * findUniq([ 0, 0, 0.55, 0, 0 ]); // 0.55
 */

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
