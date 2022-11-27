<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem002;
use PHPUnit\Framework\TestCase;

class Problem2Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem002
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('4613732', (new Problem002())());
    }
}
