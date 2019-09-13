<?php
// Your code here!
$array = array(3, 5, 65, 44, 22);

$firstMax = 0;
$secMax = 0;

for($index = 0; $index < count($array); $index++) {
    
   if ($array[$index] > $firstMax) {
         $secMax = $firstMax;
          $firstMax = $array[$index];
   } else if ($array[$index] > $secMax) {
        $secMax = $array[$index];
   }
    
}

echo "First maximum Value =".$firstMax;
echo "Second maximum Value =".$secMax;
?>
