<?php declare(strict_types=1);

namespace CodeWars\Tests;

use CodeWars\FindTheUnknownDigit;
use PHPUnit\Framework\TestCase;

final class FindTheUnknownDigitTest extends TestCase
{
    public function provideTestData(): array
    {
        return [
            ['1+1=?', 2],
            ['123*45?=5?088', 6],
            ['-5?*-1=5?', 0],
            ['19--45=5?', -1],
            ['??*??=302?', 5],
            ['?*11=??', 2],
            ['??*1=??', 2],
            ['?+?=?', 0],
            ['?-?=?', 0],
            ['?*?=?', 0],
            ['??+?=?', -1],
            ['-7715?5--484?00=-28?9?5', 6],
            ['?15816+11148=?26964', 3],
            ['731*219=16??89', 0],
        ];
    }

    /**
     * @dataProvider provideTestData
     */
    public function test(string $input, int $expectedOutput): void
    {
        self::assertSame($expectedOutput, FindTheUnknownDigit::solveExpression($input));
    }
}