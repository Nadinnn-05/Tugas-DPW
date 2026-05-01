<?php
// Array dengan index nama dan umur (15 data)
$mahasiswa = [
    ["nama" => "Martin",    "umur" => 20],
    ["nama" => "James",     "umur" => 21],
    ["nama" => "Seonghyeon","umur" => 19],
    ["nama" => "Keonho",    "umur" => 22],
    ["nama" => "Juhoon",    "umur" => 20],
    ["nama" => "Haechan",   "umur" => 21],
    ["nama" => "Mark",      "umur" => 23],
    ["nama" => "Karina",    "umur" => 20],
    ["nama" => "Winter",    "umur" => 22],
    ["nama" => "Lisa",      "umur" => 21],
    ["nama" => "Rose",      "umur" => 19],
    ["nama" => "Jennie",    "umur" => 20],
    ["nama" => "Jiso",      "umur" => 22],
    ["nama" => "Ian",       "umur" => 21],
    ["nama" => "Kai",       "umur" => 23],
];

// Konversi array ke JSON
$json = json_encode($mahasiswa, JSON_PRETTY_PRINT);

echo "<pre>" . $json . "</pre>";

// Konversi balik JSON ke array (decode)
$array_kembali = json_decode($json, true);
echo "<br>Data pertama: " . $array_kembali[0]["nama"] . ", umur " . $array_kembali[0]["umur"];
?>