/* Aturan Huruf Nilai
   C   = 0-> 59
   BC  = 60-> 69  
   B   = 70-> 79
   AB  = 80-> 89
   A   = 90-> 100
*/
<?php
$nilai = 85;
if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "Nilai AB";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Nilai B";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "Nilai BC";
} elseif ($nilai >= 0 && $nilai < 60) {
    echo "Nilai C";
} else {
    echo "Nilai tidak valid";
}
?>

