<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

use Dannyvandersluijs\ProjectEuler\Problem020;

class Problem20Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem020
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('648', (new Problem020())());
    }
}
