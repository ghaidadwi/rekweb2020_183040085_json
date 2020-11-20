<?php
// Ini untuk latihan 1 dan latihan 2
$mahasiswa = [
    [
        "nama" => "Ghaida Dwi Febriyanti",
        "nrp" => "183040085",
        "email" => "febriyanti.183040085@mail.unpas.ac.id"
    ],
    [
        "nama" => "Alviona Caroline",
        "nrp" => "183040089",
        "email" => "rusnadi.183040089@mail.unpas.ac.id"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
