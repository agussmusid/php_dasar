<?php
// Tanpa null coalecsing operator
$data = [];
if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}
echo $action;
echo "\n===============================\n";
// Dengan null coalecsing operator
$arr = [
    'action' => 'run'
];
$aksi = $arr['action'] ?? 'nothing';
echo $aksi;
