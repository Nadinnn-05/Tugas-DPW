// Soal 1: Hitung Gaji Bersih
// Diketahui :
// - Gaji Pokok: 3.250.000
// - Tunjangan: 1.200.000
// - Pajak: 10% dari Gaji Kotor
// Hitung Gaji Bersih Obi setelah dipotong pajak dan tampilkan hasilnya dalam format mata uang Indonesia (Rp).

<?php
$gaji_pokok = 3250000;
$tunjangan  = 1200000;
$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak      = 0.10 * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji Bersih Obi: Rp. " . number_format($gaji_bersih, 0, ',', '.');
?>

// Gaji bersih = (gaji pokok + tunjangan) − pajak 10%

