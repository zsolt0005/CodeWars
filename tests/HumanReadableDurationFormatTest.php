<?php declare(strict_types = 1);

namespace CodeWars\Tests;

use CodeWars\HumanReadableDurationFormat;
use PHPUnit\Framework\TestCase;

final class HumanReadableDurationFormatTest extends TestCase
{
  public function provideTestData(): array
  {
    return [
      [0, 'now'],
      [1, '1 second'],
      [62, '1 minute and 2 seconds'],
      [120, '2 minutes'],
      [3600, '1 hour'],
      [3662, '1 hour, 1 minute and 2 seconds'],
    ];
  }

  /**
   * @dataProvider provideTestData
   */
  public function test(int $input, string $expectedOutput): void
  {
    self::assertSame($expectedOutput, HumanReadableDurationFormat::formatDuration($input));
  }
}
