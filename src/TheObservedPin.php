<?php declare(strict_types=1);

namespace CodeWars;

// https://www.codewars.com/kata/5263c6999e0f40dee200059d
final class TheObservedPin
{
public static function getPINs(string $observed): array
{
    $adjacentKeys = [
        '1' => ['1', '2', '4'],
        '2' => ['1', '2', '3', '5'],
        '3' => ['2', '3', '6'],
        '4' => ['1', '4', '5', '7'],
        '5' => ['2', '4', '5', '6', '8'],
        '6' => ['3', '5', '6', '9'],
        '7' => ['4', '7', '8'],
        '8' => ['5', '7', '8', '9', '0'],
        '9' => ['6', '8', '9'],
        '0' => ['8', '0']
    ];

    if(strlen($observed) == 1)
    {
        return $adjacentKeys[$observed];
    }

    $currentDigit = $observed[0];
    $remainingDigits = substr($observed, 1);
    $remainingCombinations = self::getPINs($remainingDigits);

    $combinations = [];
    foreach($adjacentKeys[$currentDigit] as $adjacentDigit)
    {
        foreach($remainingCombinations as $remainingCombination)
        {
            $combinations[] = $adjacentDigit . $remainingCombination;
        }
    }

    return $combinations;
}
}