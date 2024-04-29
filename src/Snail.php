<?php

/** @noinspection SlowArrayOperationsInLoopInspection */
/** @noinspection MissingOrEmptyGroupStatementInspection */

declare(strict_types = 1);

namespace CodeWars;

// https://www.codewars.com/kata/521c2db8ddc89b9b7a0000c1
final class Snail
{
  public static function snail(array $input): array
  {
    $snail = [];

    while (true)
    {
      // TOP
      $snail = array_merge($snail, array_shift($input));
      if(empty($input)) break;

      // RIGHT
      foreach($input as $key => $value)
      {
        $snail[] = array_pop($input[$key]);
      }

      // BOTTOM
      $snail = array_merge($snail, (array) array_reverse(array_pop($input)));
      if(empty($input)) break;

      // LEFT
      for($i = count($input) - 1; $i >= 0; $i--)
      {
        $snail[] = array_shift($input[$i]);
      }
    }

    return array_values($snail);
  }
}
