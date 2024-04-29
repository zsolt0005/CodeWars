<?php declare(strict_types = 1);

namespace CodeWars;

final class NextBiggerNumberWithSameDigits
{
  public static function nextBigger(int $number): int
  {
    $numberParts = str_split((string) $number);

    for($i = count($numberParts) - 1; $i > 0; $i--)
    {
      if($numberParts[$i] <= $numberParts[$i - 1])
      {
        continue;
      }

      $numberToSwap = $numberParts[$i - 1];
      $numbersBeforeSwap = array_slice($numberParts, $i);

      $found = false;
      for($j = count($numbersBeforeSwap) - 1; $j >= 0; $j--)
      {
        if($numbersBeforeSwap[$j] > $numberToSwap)
        {
          $temp = $numberParts[$i - 1];
          $numberParts[$i - 1] = $numbersBeforeSwap[$j];
          $numbersBeforeSwap[$j] = $temp;
          $found = true;
          break;
        }
      }

      if(!$found)
      {
        break;
      }

      sort($numbersBeforeSwap);
      array_splice($numberParts, $i, count($numbersBeforeSwap), $numbersBeforeSwap);
      return (int) implode('', $numberParts);
    }

    return -1;
  }
}
