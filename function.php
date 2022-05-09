<?php
// function original tanpa argument
echo "\n===function original tanpa argument===\n";
function sayHEllo()
{
    echo "Haloo";
}

sayHEllo();
// function dengan argument
function Hello($name)
{
    echo "Haloo " . $name . PHP_EOL;
}

HEllo("agus");

// function default argument
echo "\n===function default argument===\n";
function Hi($nama = "anonymous")
{
    echo "Haloo " . $nama . PHP_EOL;
}

Hi();
// function type declaration
echo "\n===function type declaration===\n";
function sum(int $value1, int $value2)
{
    $total = $value1 += $value2;
    echo $total . PHP_EOL;
}

sum(10, 10);
sum("20", "30");
sum(2.5, 2.5);
// function return value
echo "\n===function return value===\n";
function value(int $value)
{
    if ($value >= 90) {
        return "A+";
    } elseif ($value >= 80) {
        return "B+";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } else {
        return "E";
    }
}
var_dump(value(90));
// variable function
echo "\n===variable function===\n";

function Oy()
{
    echo "woy";
}
$salam = "Oy";
$salam();

// anonymous function (Closure)
echo "\n===anonymous function===\n";

$asmi = function (int $angka) {
    echo "Hello agus" . $angka;
};

$asmi(10);

// Mengakses variable yang dari luar
echo "\n===Mengakses variable dari luar===\n";

$firstname = "agus";
$lastname = "musid";

$salam = function () use ($firstname, $lastname) {
    echo "Heloo $firstname $lastname" . PHP_EOL;
};

$salam();

// arrrow function
echo "\n===arrrow function===\n";

$dukuh = "ndogleg";
$dusun = "karanganyar";

$print = fn () => "alamat $dukuh $dusun";

echo $print();

// array function
echo "\n===array function===\n";

$data = [
    "firstname" => "agus",
    "lastname" => "musid"
];

// sort($data);
// var_dump($data);

var_dump(array_keys($data));
