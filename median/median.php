<?php

function cariMedian($arr)
{
    // count array length
    $arrLength = 0;
    foreach ($arr as $key => $value) {
        $arrLength++;
    }

    // $getMedian = floor($arrLength / 2);
    $getMedian = $arrLength / 2;
    // echo $getMedian;

    if ($arrLength % 2 !== 0) {
        $medianValue = $arr[$getMedian - 0.5];
    } else {
        $medianValue = ($arr[$getMedian - 1]  + $arr[$getMedian]) / 2;
    }
    echo "Median: $medianValue";
    return $medianValue;
}

$myArr = [7, 7, 8, 8];

cariMedian($myArr);
