<?php
// Dot operator
$name = "agus musid";
$addres = "karanganyar Lancar";
echo "nama :" . $name . PHP_EOL;
echo "alamat :" . $addres;

echo "\n===================================\n";
// konversi ke number dan sebaliknya;

$valuestring = (string)50;
var_dump($valuestring);
$valueint = (int)"20";
var_dump($valueint);
$valuefloat = (float)"10.67";
var_dump($valuefloat);

// mengakses karakter string berdasarkan index;
echo "\n===================================\n";
$nama = "agus";
echo $nama[0];
