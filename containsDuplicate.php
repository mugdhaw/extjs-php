<?php

$nums = [7,1,5,3,6,7];
$boolIsDuplicatePresent = containsDuplicate($nums);

echo "Is Duplicate ::".$boolIsDuplicatePresent;
/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {

    sort($nums); // sorting array first will take less time than traversing through each and every number in the array using two forloop
    for($i = 0; $i < count($nums) - 1; $i++) {
        if ($nums[$i] == $nums[$i+1]) return true;
    }

}

?>