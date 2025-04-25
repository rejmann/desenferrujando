<?php

namespace Desenferrujando\LeetCode\TwoSum;

class Solution
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    function twoSum(array $nums, int $target): array
    {
        $result = [];

        foreach ($nums as $index => $num) {
            $diff = $target - $num;

            if (array_key_exists($diff, $result)) {
                return [$result[$diff], $index];
            }
            
            $result[$num] = $index;
        }

        return $result;
    }
}
