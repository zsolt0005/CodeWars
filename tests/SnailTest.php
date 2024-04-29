<?php declare(strict_types = 1);

namespace CodeWars\Tests;

use CodeWars\Snail;
use PHPUnit\Framework\TestCase;

final class SnailTest extends TestCase
{
  public function provideTestData(): array
  {
    return [
      '0' => [
        [[]],
        []
      ],
      '1' => [
        [
          [1, 2, 3],
          [4, 5, 6],
          [7, 8, 9]
        ],
        [1, 2, 3, 6, 9, 8, 7, 4, 5]
      ],
      '2' => [
        [
          [1, 2, 3],
          [8, 9, 4],
          [7, 6, 5]
        ],
        [1, 2, 3, 4, 5, 6, 7, 8, 9]
      ],
      '3' => [
        [
          [1, 2, 3, 1],
          [4, 5, 6, 4],
          [7, 8, 9, 7],
          [7, 8, 9, 7]
        ],
        [1, 2, 3, 1, 4, 7, 7, 9, 8, 7, 7, 4, 5, 6, 9, 8]
      ]
    ];
  }

  /**
   * @dataProvider provideTestData
   */
  public function test(array $input, array $expectedOutput): void
  {
    self::assertSame($expectedOutput, Snail::snail($input));
  }
}
