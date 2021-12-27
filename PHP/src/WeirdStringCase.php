<?php

namespace Kata;


class WeirdStringCase
{
  function apply(string $str)
  {
    $str = strtolower($str);
    $str_explode = explode(" ", $str);

    foreach ($str_explode as &$word) {
      $word = self::toWeirdCase($word);
    }

    return implode(" ", $str_explode);
  }

  static function toWeirdCase(string $word)
  {
    $word_length = strlen($word);
    $word_composition = "";

    for ($i = 0; $i < $word_length; $i++) {
      $letter = $word[$i];

      if ($i % 2 == 0) {
        $letter = strtoupper($letter);
      }
      $word_composition .= $letter;
    }

    return $word_composition;
  }
}
