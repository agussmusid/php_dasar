<?php
// non for each
$name1 = ["agus", "musid"];

for ($i = 0; $i < count($name1); $i++) {
    echo "hello" . $name1[$i] . PHP_EOL;
}

// Menggunakan foreach
echo "\n============================\n" . PHP_EOL;
$names = ["agus", "musid"];

foreach ($names as $name) {
    echo "Hello" . $name . PHP_EOL;
}

// menggunakan custom key

echo "\n============================\n" . PHP_EOL;
$alamat = [
    "gunungpasar" => "kalijanggel",
    "sabrangwetan" => "karanganyar"
];
foreach ($alamat as $addres => $value) {
    echo "$addres Dusun $value" . PHP_EOL;
}
