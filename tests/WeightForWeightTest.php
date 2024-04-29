<?php declare(strict_types = 1);

namespace CodeWars\Tests;

use CodeWars\WeightForWeight;
use PHPUnit\Framework\TestCase;

final class WeightForWeightTest extends TestCase
{
  public function provideTestData(): array
  {
    return [
      ["56 65 74 100 99 68 86 180 90", "100 180 90 56 65 74 68 86 99"],
      ["103 123 4444 99 2000", "2000 103 123 4444 99"],
      ["2000 10003 1234000 44444444 9999 11 11 22 123", "11 11 2000 10003 22 123 1234000 44444444 9999"],
    ];
  }

  /**
   * @dataProvider provideTestData
   */
  public function test(string $input, string $expectedOutput): void
  {
    self::assertSame($expectedOutput, WeightForWeight::orderWeight($input));
  }
}
