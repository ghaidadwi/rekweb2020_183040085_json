<?php
// Ini untuk latihan 3 yang coba.json dan latihan 4  ,nama filenya latihan2.php
$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
