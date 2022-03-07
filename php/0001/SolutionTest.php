<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once __DIR__ . '/Solution.php';

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider twoSumProvider
     */
    public function twoSum($nums, $target, $expected): void
    {
        $o = new Solution();
        $this->assertSame($expected, $o->twoSum($nums, $target));
    }

    public function twoSumProvider()
    {
        return [
            [[2, 7, 11, 15], 9, [0, 1]],
            [[11, 7, 15, 2], 9, [1, 3]],
            [[3, 2, 4], 6, [1, 2]],
            [[3, 3], 6, [0, 1]],
            [[3, 5], 6, []],
            [[0, 4, 3, 0], 0, [0, 3]],
            [[-1, -2, -3, -4, -5], -8, [2, 4]],
        ];

    }
}
