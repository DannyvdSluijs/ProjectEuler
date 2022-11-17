<?php

declare(strict_types=1);

namespace Tests\Dannyvandersluijs\ProjectEuler;

class Problem7Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \Dannyvandersluijs\ProjectEuler\Problem007
     */
    public function testForCorrectAnswer(): void
    {
        self::assertEquals('104743', (new \Dannyvandersluijs\ProjectEuler\Problem007())());
    }
}
