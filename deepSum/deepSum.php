<?php

function deepSum($arr)
{
    if (!$arr) {
        echo "No Number";
    } else {
        $totalArr = 0;

        foreach ($arr as $i => $subArray) {
            foreach ($subArray as $j => $subSubArray) {
                foreach ($subSubArray as $k => $value) {
                    $totalArr += $value;
                }
            }
        }

        echo ($totalArr);
        return $totalArr;
    }
}

$myArr = [
    [
        [4, 5, 6],
        [9, 1, 2, 10],
        [9, 4, 3]
    ],
    [
        [4, 14, 31],
        [9, 10, 18, 12, 20],
        [1, 4, 90]
    ],
    [
        [2, 5, 10],
        [3, 4, 5],
        [2, 4, 5, 10]
    ]
];

deepSum($myArr);
