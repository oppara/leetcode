<?php

declare(strict_types=1);

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        foreach ($nums as $idx => $num) {
            $diff = $target - $num;
            $keys = array_keys($nums, $diff, true);
            foreach ($keys as $key) {
                if ($key !== $idx) {
                    return [$idx, $key];
                }
            }
        }

        return [];
    }
}
