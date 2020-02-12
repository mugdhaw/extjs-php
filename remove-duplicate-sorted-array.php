<?php

$nums = [0,0,1,1,2,2,3,3,4];
$len = removeDuplicates($nums);

echo "length ::".$len;

print_r($nums);
function removeDuplicates (&$nums) {
    for ($i = 0, $j = 0; $i < count($nums); $i++) {
        if ($i == 0) {
            $number =  $nums[$i];
            $j++;
            continue;
        }
        if ($number != $nums[$i]) {
            $number =  $nums[$i];
            $nums[$j] = $nums[$i];
            $j++;
        }
    }

    return $j;
}
?>