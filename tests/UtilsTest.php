<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function getFixtureFullPath(string $fixtureName): string
    {
        $parts = [__DIR__, 'fixtures', $fixtureName];
        return realpath(implode('/', $parts));
    }

    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testReverseWithFixtures(): void
    {
        $pathToText = $this->getFixtureFullPath('text.txt');
        $text = file_get_contents($pathToText);
        $pathToReversedText = $this->getFixtureFullPath('reversed_text.txt');
        $reversedText = file_get_contents($pathToReversedText);
        $this->assertEquals($reversedText, reverseString($text));
    }
}