<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan ".$x + $y."<br>";    // 15
echo "Pengurangan ".$x - $y."<br>";   // -5
echo "Perkalian ".$x * $y."<br>";     // 50
echo "Pembagian ".$y / $x."<br>";     // 2
echo "Modulus ".$x % $y."<br>";       // 5
echo "Exponensial ".$x ** $y."<br>";  // 5^10

// Assignment operators
$x += 2;  // $x = $x + 2  → $x = 7
$y *= 2;  // $y = $y * 2  → $y = 20

// Increment/Decrement
echo "Isi ++x = ".++$x."<br>";  // pre-increment: tambah dulu, lalu tampilkan
echo "Isi x++ = ".$x++."<br>";  // post-increment: tampilkan dulu, lalu tambah
echo "Isi x = ".$x."<br>";

// Conditional assignment
$user = "Andi darmawan";
// Jika $user kosong, maka $status = "Kosong", jika tidak, $status = "Ada isi"
$status = (empty($user)) ? "Kosong" : "Ada isi";  // ternary operator
echo $status."<br>";
// variable $color diisi dengan "red" jika $color belum diisi atau null

$color = $color ?? "red";  // jika $color null/tidak ada, isi "red"
?>

//Perbedaan Perbedaan $x++ dan ++$x adalah urutan eksekusinya. ++$x menambah nilai terlebih dahulu kemudian menampilkan hasil yang sudah bertambah. $x++ menampilkan nilai asli terlebih dahulu, baru kemudian nilainya bertambah.
*/ ++$x = adalah pre-increment, artinya nilai $x akan ditambah terlebih dahulu sebelum digunakan dalam ekspresi.
   $x++ = adalah post-increment, artinya nilai $x akan digunakan terlebih dahulu dalam ekspresi, baru kemudian nilainya akan ditambah. 
*/