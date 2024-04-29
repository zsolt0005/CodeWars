<?php declare(strict_types = 1);

namespace CodeWars\Tests;

use CodeWars\NextBiggerNumberWithSameDigits;
use PHPUnit\Framework\TestCase;

final class NextBiggerNumberWithSameDigitsTest extends TestCase
{
  public function provideTestData(): array
  {
    return [
      [12, 21],
      [513, 531],
      [2017, 2071],
      [414, 441],
      [144, 414],
      [123456789, 123456798],
      [1234567890, 1234567908],
      [9876543210, -1],
      [9999999999, -1],
      [59884848459853, 59884848483559],
      [9, -1],
      [111, -1],
      [531, -1]
    ];
  }

  /**
   * @dataProvider provideTestData
   */
  public function test(int $input, int $expectedOutput): void
  {
    self::assertSame($expectedOutput, NextBiggerNumberWithSameDigits::nextBigger($input));
  }
}