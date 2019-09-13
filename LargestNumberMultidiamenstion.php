<?php

//find the maximum value from two dimenstion array in php
$array = array(array(110, 20, 52),array(105, 56, 89, 96),array( 556, 89, 96));
$highestValue = 0;
foreach ($array as $val) {
    $maxValue = max($val);

    if ($maxValue > $highestValue) 
       $highestValue = $maxValue;
}
echo "highestValue :: ".$highestValue;


// ----------------------- or without max function -------------------------


$arr= array(array(110, 20, 52),array(105, 56, 89, 96),array( 556, 89, 96));
$b = 0;
foreach ($arr as $val)
{
	foreach($val as $key=>$val1)
	{
		if ($val1 > $b)
	 	{
        $b = $val1;
    	}
	}   	
}
echo $b;


?>
