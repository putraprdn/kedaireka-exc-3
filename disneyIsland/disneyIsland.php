<?php

/**
 * =============
 * Disney Island
 * =============
 *
 * Buatlah function untuk memecahkan kasus berikut:
 * 
 * Sebuah wahana bermain 'Disney Island' akan memberikan tarif sesuai dengan tinggi dan umur anak
 * dengan ketentuan sebagai berikut:
 * - Umur 1 tahun ke bawah: Tampilkan 'Dilarang masuk'
 * - Umur 2-3 tahun: Rp 30.000. Jika tinggi anak umur 2-3 tahun lebih dari 70cm maka tarif akan bertambah 10.000
 * - Umur 4-7 tahun: Rp 40.000. Jika tinggi anak umur 4-7 tahun lebih dari 120cm maka tarif akan bertambah 15.000
 * - Umur 8-10 tahun: Rp 50.000. Jika tinggi anak umur 8-10 tahun lebih dari 150cm maka tarif akan bertambah 20.000
 * - Umur diatas 10 tahun : Rp 80.000
 * Tampilkan tarif harga sesuai umur dan tinggi seorang anak!
 *
 **/

function DisneyLand($umur, $tinggi)
{
    if ($umur <= 1) {
        echo "Bocil dilarang masuk!";
    } elseif ($umur <= 3) {
        $price = 30000;
        if ($tinggi > 70) {
            $price += 10000;
        }
        echo "Umur: $umur tahun\nTinggi: $tinggi cm\nTarif: Rp. $price";
    } elseif ($umur <= 7) {
        $price = 40000;
        if ($tinggi > 120) {
            $price += 15000;
        }
        echo "Umur: $umur tahun\nTinggi: $tinggi cm\nTarif: Rp. $price";
    } elseif ($umur <= 10) {
        $price = 50000;
        if ($tinggi > 150) {
            $price += 20000;
        }
        echo "Umur: $umur tahun\nTinggi: $tinggi cm\nTarif: Rp. $price";
    } elseif ($umur > 10) {
        $price = 80000;
        echo "Umur: $umur tahun\nTinggi: $tinggi cm\nTarif: Rp. $price";
    } else {
        echo "Mohon periksa kembali input yang diberikan!";
    }
}

$umur = 9;
$tinggi = 100;
DisneyLand($umur, $tinggi);
