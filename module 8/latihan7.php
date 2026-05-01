<?php

$namaBuah = array("apel", "jeruk", "mangga", "pisang", "anggur");
echo "saya suka buah " . $namaBuah[0] . " , " . $namaBuah[1] . " dan " . $namaBuah[2] . " , " . $namaBuah[3] . " dan " . $namaBuah[4] . ".";

// tampilkan Apel
echo "saya suka buah " . $namaBuah[0] ;
// tampilkan Jeruk
echo "say suka buah " . $namaBuah[1] ;
// tampilkan Mangga
echo "saya suka buah " . $namaBuah[2] ;
// tampilkan pisang
echo "saya suka buah " . $namaBuah[3] ;
// tampilkan anggur
echo "saya suka buah " . $namaBuah[4] ;

// array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun");
$umur['ahmad'] = "50 Tahun";  // menambah elemen baru
echo "Umur andi adalah " . $umur['andi'];
?>