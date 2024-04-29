<?php

/** @noinspection MissingOrEmptyGroupStatementInspection */

declare(strict_types = 1);

namespace CodeWars;

// https://www.codewars.com/kata/55983863da40caa2c900004e
final class NextBiggerNumberWithSameDigits
{
  public static function nextBigger(int $number): int
  {
    $numberParts = str_split((string) $number);

    $numberToSwapIndex = null;
    for($i = count($numberParts) - 1; $i > 0; $i--)
    {
      if($numberParts[$i] <= $numberParts[$i - 1]) continue;

      $numberToSwapIndex = $i - 1;
      break;
    }
    if($numberToSwapIndex === null) return -1;

    $numberToSwap = $numberParts[$numberToSwapIndex];
    $numbersBeforeSwap = array_slice($numberParts, $numberToSwapIndex + 1);

    $found = false;
    for($j = count($numbersBeforeSwap) - 1; $j >= 0; $j--)
    {
      if($numbersBeforeSwap[$j] > $numberToSwap)
      {
        $temp = $numberParts[$numberToSwapIndex];
        $numberParts[$numberToSwapIndex] = $numbersBeforeSwap[$j];
        $numbersBeforeSwap[$j] = $temp;
        $found = true;
        break;
      }
    }

    if(!$found) return -1;

    sort($numbersBeforeSwap);
    array_splice($numberParts, $numberToSwapIndex + 1, count($numbersBeforeSwap), $numbersBeforeSwap);
    return (int) implode('', $numberParts);
  }
}
