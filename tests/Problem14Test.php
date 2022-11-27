<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem014;
use PHPUnit\Framework\TestCase;

class Problem14Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem014
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('837799', (new Problem014())());
    }
}
