<?php

function ladder($word)
{
    $myArr = [];
    $idx = 1;
    for ($i = 0; $i <= strlen($word) - 1; $i++) {
        for ($j = 0; $j <= strlen($word) - $idx; $j++) {
            $myArr[$i][$j] = $word[$j];
        }
        $idx++;
    }

    print_r($myArr);
    return $myArr;
}

$text = "4angrymen";
ladder($text);
