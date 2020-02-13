<?php

$nums = [1,2,3,4,5,6,7];
// R-1 : [7,1,2,3,4,5,6]
// R-2 : [6,7,1,2,3,4,5]
// R-3 : [5,6,7,1,2,3,4]
// output : [5,6,7,1,2,3,4]
$k = 3;
$intLen = rotate($nums, $k);

print_r($nums);


function rotate(&$nums, $k) {
    $count = count($nums);
    if ($count === 0) {
        return [];
    }

    for ($i = 0; $i < $k; $i++) {
        $arr = [];
        for ($j = 0; $j < $count; $j++) {
            if ($j == 0) {
                $arr[$j] = $nums[$count-1];
                continue;
            }
            $arr[$j] = $nums[$j-1];
        }
        $nums = $arr;
    }
}

?>