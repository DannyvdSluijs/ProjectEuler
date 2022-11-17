<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem019;
use PHPUnit\Framework\TestCase;

class Problem19Test extends TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem019
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('171', (new Problem019())());
    }
}
