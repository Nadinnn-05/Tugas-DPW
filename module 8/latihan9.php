<?php

// Contoh Fungsi
function writeMsg($nama) {
    echo "selamat datang " . $nama . " <br>";
}
// Pemanggil fungsi
writeMsg(nama: "Martin"); 

// Fungsi dengan mengirim nilai kembali
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a;  // mengirim hasil ke pemanggil
}
$hasil = tambah(angka1: 5, angka2: 5);
echo ($hasil);
?>