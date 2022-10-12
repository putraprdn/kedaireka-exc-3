<?php

/***
  ==========
  ISI BENSIN
  ==========
 
  Buatlah sebuah FUNGSI dengan DUA PARAMETER -> `tipeBensin` dan `uang` yang akan menentukan berapa jumlah liter yang akan didapatkan sebuah mobil
  sesuai dengan uang yang dimiliki pengguna mobil tersebut
 
  Ketika sebuah mobil tidak memiliki `tipe bensin` atau `uang` maka tampilkan 'Tidak ada tipe bensin dan uang'
 
  Ketika `tipe bensin` mobil tersebut adalah `solar` maka biaya pengisian bensinnya adalah 5000 setiap liternya,
  Ketika `tipe bensin` mobil tersebut adalah `premium` maka biaya pengisian bensinnya adalah 7500 setiap liternya.
  Ketika `tipe bensin` mobil tersebut adalah `pertamax` maka biaya pengisian bensinnya adalah 10000 setiap liternya.
 
  Ketika pengisian bensin hasil nya tidak bulat maka hanya tampilkan satu angka dibelakang koma.
 
  contoh:
  1. tipe bensin = solar
  2. uang = 30000
 
  Output => Mobil anda telah terisi solar sebanyak 6.0 lt
 
  1. tipe bensin = premium
  2. uang = 35000
 
  Output => Mobil anda telah terisi premium sebanyak 4.6 lt
 */

function tumbasBensin($tipeBensin, $uang)
{
  $tipeBensin = strtolower($tipeBensin);
  if (!$uang || !$tipeBensin) {
    echo "Tidak ada tipe bensin dan uang";
  } elseif ($tipeBensin === "solar") {
    $price = 5000;
  } elseif ($tipeBensin === "premium") {
    $price = 7500;
  } elseif ($tipeBensin === "pertamax") {
    $price = 10000;
  } else {
    echo "Mohon periksa kembali input yang diberikan!";
    exit();
  }

  $getBensin = round($uang / $price, 1);
  echo "Mobil anda telah terisi $tipeBensin sebanyak $getBensin lt";
}


$tipeBensin = "premium";
$uang = 35000;
tumbasBensin($tipeBensin, $uang);
