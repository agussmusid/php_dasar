<?php

$first = [
    "first-name" => "agus"
];

$last = [
    "last-name" => "musid"
];

var_dump($first + $last);
// harus sama antara key & value agar bernilai true;
var_dump($first == $last);
// true jika keduanya tidak sama;
var_dump($first != $last);
