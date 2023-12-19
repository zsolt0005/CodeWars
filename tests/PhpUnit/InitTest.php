<?php declare(strict_types=1);

namespace Zsolt\CodeWars\Tests\PhpUnit;

use Exception;
use PHPUnit\Framework\TestCase;
use Zsolt\CodeWars\InitClass;

final class InitTest extends TestCase
{
    /**
     * @return void
     * @throws Exception
     */
    public function testCase(): void
    {
        self::assertTrue(InitClass::true());
    }
}