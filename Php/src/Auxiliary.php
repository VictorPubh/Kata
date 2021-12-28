<?php

namespace Kata;

class Auxiliary
{
    public function lowerAndSplit($str, $removeSpace = false)
    {
        if ($removeSpace) {
            $str_explode = explode(" ", $str);
            $str = join("", $str_explode);
        }

        $lower = strtolower($str);
        $split = str_split($lower, 1);

        return $split;
    }
}
