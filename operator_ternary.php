<?php
// Tanpa operator ternary
$kelamin = "PRIA";
$hi = null;

if ($kelamin == "PRIA") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi sist!";
}
echo "$hi";
echo "\n===========================\n";
// Dengan operator ternary
$gender = "WANITA";
$oy = $gender == "PRIA" ? "Hi bro" : "Hi sist!";
echo "$oy";
