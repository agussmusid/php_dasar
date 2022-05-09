<?php

$nilai = 70;

switch ($nilai) {
    case 100:
    case 90:
        echo "Anda lulus dengan nilai sempurna" . PHP_EOL;
        break;
    case 80:
    case 70:
        echo "Anda lulus\n";
        break;
    default:
        echo "Mungin anda tidak mengikuti ujian";
}
