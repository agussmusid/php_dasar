<?php
// Ini adalah break
$break = 1;
while (true) {
    echo "ini adlah break ke-" . $break . PHP_EOL;
    $break++;

    if ($break >= 10) {
        break;
    }
}

echo "\n===========================================\n" . PHP_EOL;
// Ini adalah continue

for ($continue = 1; $continue < 100; $continue++) {
    if ($continue % 2 == 1) {
        continue;
    }
    echo "Continue genap ke-" . $continue . PHP_EOL;
}
