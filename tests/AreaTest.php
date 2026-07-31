<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Area\calculateRectangleArea;

class AreaTest extends TestCase
{
    #[DataProvider('areaProvider')]
    public function testArea(?int $expected, int $argument1, int $argument2): void
    {
        $this->assertEquals($expected, calculateRectangleArea($argument1, $argument2));
    }

    public static function areaProvider(): array
    {
        return [
            [6, 2, 3],
            [null, 0, 8],
            [null, -2, 4],
            [null, 3, -10],
            [null, -4, -4],
        ];
    }
}