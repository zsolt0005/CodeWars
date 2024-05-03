<?php declare(strict_types=1);

namespace CodeWars;

// https://www.codewars.com/kata/546d15cebed2e10334000ed9
final class FindTheUnknownDigit
{
    public static function solveExpression(string $expression): int
    {
        $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

        foreach ($numbers as $number)
        {
            if(str_contains($expression, (string) $number))
            {
                continue;
            }

            $temp = str_replace('?', (string) $number, $expression);
            $sides = explode('=', $temp);

            $rightSideValue = (int) $sides[1];
            if($sides[1] !== (string) $rightSideValue)
            {
                continue;
            }

            $leftSideParts = preg_split('/(?<![-+*])(?<!^)[-+*]/', $sides[0], -1, PREG_SPLIT_NO_EMPTY);
            if($leftSideParts[0] !== (string) ((int) $leftSideParts[0]) || $leftSideParts[1] !== (string) ((int) $leftSideParts[1]))
            {
                continue;
            }

            $leftSide = str_replace('--', '- -', $sides[0]);
            $leftSideValue = eval('return ' . $leftSide . ';');
            if($leftSideValue === $rightSideValue)
            {
                return $number;
            }
        }

        return -1;
    }
}