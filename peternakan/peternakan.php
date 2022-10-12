<?php

/*
==================
PETERNAKAN STARDOO
==================
Peternakan Stardoo memiliki 3 jenis hewan: ayam, domba, dan sapi. Tiap jenis hewan bisa berjenis kelamin jantan maupun betina dan memiliki karakteristik yang berbeda-beda.
Karakteristik domba:
1. Domba jantan menghasilkan 0.1 kg wol setiap harinya.
2. Domba betina menghasilkan 0.15 kg wol setiap harinya.
Karakteristik sapi:
1. Sapi jantan beratnya naik 0.5 kg setiap harinya.
2. Sapi betina menghasilkan 20 liter susu setiap hari.
Karakteristik ayam:
1. Ayam jantan beratnya naik 0.2 kg setiap harinya.
2. Ayam betina bertelur setiap 2 hari sekali.

Tugas Anda adalah untuk membuat FUNGSI yang menerima tiga buah parameter, yaitu: `hewan`, `jenisKelamin`, dan `hari`.
Tampilkanlah hasil sesuai dengan karakteristik tiap-tiap hewan berdasarkan jenis kelamin dan berapa hari yang telah berlalu.

--------                                                                          
CONTOH 1                                                                            
--------                                                                           
hewan = 'Domba'                                                                     
jenisKelamin = 'betina'
hari = 2
OUTPUT:
Domba betina menghasilkan 0.3 kg wol setelah 2 hari

--------
CONTOH 2
--------
hewan = 'Sapi'
jenisKelamin = 'jantan'
hari = 4
OUTPUT:
Sapi jantan beratnya naik 2 kg setelah 4 hari

--------
CONTOH 3
--------
hewan = 'Sapi'
jenisKelamin = 'betina'
hari = 5
OUTPUT:
Sapi betina menghasilkan 100 liter susu setelah 5 hari

--------
CONTOH 4
--------
hewan = 'Ayam'
jenisKelamin = 'jantan'
hari = 5
OUTPUT:
Ayam jantan beratnya naik 1 kg setelah 5 hari

--------
CONTOH 5
--------
hewan = 'Ayam'
jenisKelamin = 'betina'
hari = 5
OUTPUT:
Ayam betina bertelur sebanyak 2 butir setelah 5 hari
RULE:
- Hanya boleh menggunakan built in function Math
*/

function peternakan($hewan, $jenisKelamin, $hari)
{
    $hewan = strtolower($hewan);
    $jenisKelamin = strtolower($jenisKelamin);

    switch ($hewan) {
        case 'domba':
            if ($jenisKelamin === 'jantan') {
                $wol = 0.1;
            } elseif ($jenisKelamin === 'betina') {
                $wol = 0.15;
            } else {
                $output = "Silakan periksa input yang dimasukkan.";
                break;
            }

            $value = $hari * $wol;
            $output = ucfirst($hewan) . " " . $jenisKelamin . " menghasilkan $value kg wol setelah $hari hari.";
            break;
        case 'sapi':
            if ($jenisKelamin === 'jantan') {
                $berat = 0.5;
                $value = $berat * $hari;
                $output = ucfirst($hewan) . " " . $jenisKelamin . " beratnya naik $value kg setelah $hari hari.";
            } elseif ($jenisKelamin === 'betina') {
                $susu = 20;
                $value = $susu * $hari;
                $output = ucfirst($hewan) . " " . $jenisKelamin . " menghasilkan $value liter susu setelah $hari hari.";
            } else {
                $output = "Silakan periksa input yang dimasukkan.";
            }
            break;
        case 'ayam':
            if ($jenisKelamin === 'jantan') {
                $berat = 0.2;
                $value = $berat * $hari;
                $output = ucfirst($hewan) . " " . $jenisKelamin . " beratnya naik $value kg setelah $hari hari.";
            } elseif ($jenisKelamin === 'betina') {
                $telur = 2;
                $value = floor($hari / $telur);
                $output = ucfirst($hewan) . " " . $jenisKelamin . " bertelur sebanyak $value butir setelah $hari hari.";
            } else {
                $output = "Silakan periksa input yang dimasukkan.";
            }
            break;
        default:
            $output =  "Silakan periksa input yang dimasukkan";
            break;
    }
    echo $output;
    return $output;
}


$hewan = "ayam";
$jenisKelamin = "betina";
$hari = 3;

peternakan($hewan, $jenisKelamin, $hari);
