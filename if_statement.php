<?php
$nilai = 50;
$attitude = 80;
if ($nilai >= 70 && $attitude >= 80) {
    echo "Nilai kamh=u A";
} elseif ($nilai >= 60 && $attitude >= 70) {
    echo "nilai kamu B";
} elseif ($nilai >= 50 && $attitude >= 60) {
    echo "Nilai kamu C";
} else {
    echo "kamu tidak lulus";
}
