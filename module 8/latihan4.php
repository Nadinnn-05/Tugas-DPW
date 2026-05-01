<?php
/* Operator Kondisional (Conditional Operator) dalam PHP digunakan untuk membuat keputusan berdasarkan kondisi
* == Sama dengan $x == $y
* === Identical  $x === $y (sama dengan dan tipe data sama)
* != Tidak sama dengan $x != $y
* <> Tidak sama dengan $x <> $y
* !== Not identical $x !== $y (tidak sama dengan atau tipe data berbeda)
* > Lebih besar $x > $y
* < Lebih kecil $x < $y
* >= Lebih besar atau sama dengan $x >= $y
* <= Lebih kecil atau sama dengan $x <= $y
* <==> Spaceship operator $x <=> $y (mengembalikan -1 jika $x < $y, 0 jika $x == $y, dan 1 jika $x > $y)
*/
$t = date(format: "H"); // mengambil jam saat ini (format 0-23)

// Hanya IF
echo "If";
if ($t < 16) {
    echo "Selamat siang!";
}

// IF - ELSE
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "selamat siang!";
} else {
    echo "Selamat malam!";
}

// NESTED IF (elseif)
echo "<br> Nested If <br>";
if ($t < 12) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>