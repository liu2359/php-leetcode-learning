<?php
/**
 * 冒泡排序
 * 
 */

function bubble_sort($nums) {
    if (count($nums) <= 1) {
        return $nums;
    }
    
    for ($i = 0; $i < count($nums); $i++) {
        $flag = false;
        for ($j = 0; $j < count($nums) - $i - 1; $j++) {
            if ($nums[$j] > $nums[$j+1]) {
                $temp  = $nums[$j];
                $nums[$j] = $nums[$j+1];
                $nums[$j+1] = $temp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }

    return $nums;
}

$nums = [4, 5, 6, 3, 2, 1];
$nums = bubble_sort($nums);
print_r($nums);
