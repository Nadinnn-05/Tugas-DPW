<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

// Loop luar mengatur baris, sedangkan loop dalam mengatur jumlah bintang yang dicetak pada setiap baris. Pada baris pertama, hanya satu bintang yang dicetak, pada baris kedua dua bintang, dan seterusnya hingga baris kesepuluh yang mencetak sepuluh bintang.