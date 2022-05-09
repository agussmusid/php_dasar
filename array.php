<?php
// cara membuat array
$array = array(1, 4, 6, 7, 8);

$array2 = ["agus", "musid"];

// mengakses data array
echo "$array2[0]";
echo "\n";
// mengubah nilai array
$array[1] = 3.1;
echo "$array[1]";
// menghapus array
unset($array[0]);
var_dump($array);
// menghitung panjang array
var_dump(count($array2));


// array sebagai map
// array dalam array
$map = [
    "name" => "agus musid",
    "age"   => "18th",
    "addres"    => "lancar",
    "hobby" => [
        "saya" => "mancing"
    ]
];

var_dump($map["hobby"]);
