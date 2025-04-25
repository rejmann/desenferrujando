<?php

require_once 'autoload.php';

use Desenferrujando\LeetCode\TwoSum\Solution;

$case1 = [2,7,11,15];
$target1 = 9;

$solution = new Solution();

$result = $solution->twoSum($case1, $target1);

var_dump($result);
