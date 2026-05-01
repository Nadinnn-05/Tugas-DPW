// Soal 2:  Menghitung banyaknya uang pecahan yang diperoleh Ani
// Diketahui :
// Uang yang diambil = Rp. 1.387.500
// Uang pecahan yang tersedia = Rp. 100.000, Rp. 50.000, Rp. 20.000, Rp. 10.000, Rp. 5.000, Rp. 2.000, Rp. 1.000
// Hitung banyaknya uang pecahan yang diperoleh Ani untuk setiap jenis pecahan dan tampilkan hasilnya.
<?php
$uang = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

foreach ($pecahan as $p) {
    $jumlah = (int)($uang / $p);
    $uang   = $uang % $p;  // sisa uang
    echo "Rp. $p : $jumlah lembar<br>";
}
?>

// Bagi uang dengan pecahan terbesar dulu, ambil hasilnya, ambil sisanya, lanjut ke pecahan berikutnya (algoritma greedy).