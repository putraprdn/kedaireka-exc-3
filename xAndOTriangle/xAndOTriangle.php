<?php

function xAndOTriangle($num)
{
    // Outer loop handles number of rows
    for ($i = 0; $i < $num; $i++) {
        // inner loop handles indentation
        for ($k = $num; $k > $i + 1; $k--) {
            // Print spaces
            echo " ";
        }
        // inner loop handles number of stars
        for ($j = 0; $j <= $i; $j++) {
            if ($j === $num) {
                echo 'x';
            }
            // Print stars
            echo "x ";
        }
        // go to new line after each row pattern is printed
        echo "\n";
    }
}

$num = 3;
xAndOTriangle($num);
