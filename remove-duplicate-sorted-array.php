<?php

$nums = [0,0,1,1,2,2,3,3,4];
$intLen = removeDuplicates($nums);

echo "length ::".$intLen;
print_r($nums);


function removeDuplicates(&$nums) {
    if (count($nums) === 0) {
        return 0;
    }

    for ($i = 1, $j = 0; $i < count($nums); $i++) {
        if ($nums[$j] != $nums[$i]) {
            $j++;
            $nums[$j] = $nums[$i];
        }
    }

    return $j+1;
}
?>