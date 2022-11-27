<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem004;
use PHPUnit\Framework\TestCase;

class Problem4Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem004
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('906609', (new Problem004())());
    }
}
