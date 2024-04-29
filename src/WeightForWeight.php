<?php declare(strict_types = 1);

namespace CodeWars;

// https://www.codewars.com/kata/55c6126177c9441a570000cc
final class WeightForWeight
{
  public static function orderWeight(string $string): string
  {
    $numbers = explode(' ', $string);

    usort($numbers, static function(string $a, string $b) {
      $aSum = array_sum(str_split($a));
      $bSum = array_sum(str_split($b));

      if($aSum === $bSum)
      {
        return strcmp($a, $b);
      }

      return $aSum < $bSum ? -1 : 1;
    });

    return implode(' ', $numbers);
  }
}
