<?php

$pricesPerDay = [7,1,5,3,6,4];
$intProfit = maxProfit($pricesPerDay);

echo "Profit ::".$intProfit;

/**
 * @param array $pricesPerDay
 *
 * @return int
 */
function maxProfit($pricesPerDay) {
    $intTotalProfit = 0;

    if (count($pricesPerDay) === 0) {
        return 0;
    }

    for ($day = 1; $day < count($pricesPerDay); $day++) {
        if ($pricesPerDay[$day] > $pricesPerDay[$day-1]) {
            $intTotalProfit =  $intTotalProfit + ($pricesPerDay[$day] - $pricesPerDay[$day-1]);
        }
    }

    return $intTotalProfit;
}
?>