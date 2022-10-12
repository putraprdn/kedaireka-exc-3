<?php

echo "## 1. Menyusun Barisan Bintang\n";
function loop1($rows1)
{
    for ($i = 0; $i < $rows1; $i++) {
        echo "*\n";
    }
}
loop1(5);

echo "\n";

echo "## 2. Menyusun Barisan Bintang Dengan Nested Looping\n";
function loop2($rows2)
{
    for ($i = 0; $i < $rows2; $i++) {
        for ($j = 0; $j < $rows2; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
loop2(5);


echo "\n";
echo "## 3. Menyusun Barisan Tangga Bintang Dengan Nested Looping\n";
function loop3($rows3)
{
    for ($i = 0; $i < $rows3; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
loop3(5);

echo "\n";
echo "## 4. Menyusun Barisan Tangga Bintang Terbalik Dengan Nested Looping\n";
function loop4($rows4)
{
    for ($i = 0; $i < $rows4; $i++) {
        for ($j = $rows4; $j > $i; $j--) {
            echo "*";
        }
        echo "\n";
    }
}
loop4(5);
