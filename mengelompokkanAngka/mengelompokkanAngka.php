<?php

function mengelompokkanAngka($arr)
{
    $newArr = [[], [], []];
    $counterGanjil = 0;
    $counterGenap = 0;
    $counterPrima = 0;
    if ($arr) {
        foreach ($arr as $index => $value) {
            if ($value % 2 === 0 && $value % 3 !== 0) {
                $newArr[0][$counterGenap] = $value;
                $counterGenap++;
            } elseif ($value % 3 === 0) {
                $newArr[2][$counterGanjil] = $value;
                $counterGanjil++;
            } else {
                $newArr[1][$counterPrima] = $value;
                $counterPrima++;
            }
        }
    }
    print_r($newArr);
    return $newArr;
}


$myArr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
mengelompokkanAngka($myArr);
