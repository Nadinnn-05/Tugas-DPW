<?php
$hari1 = "Senin";
$hari2 = "Selasa";
$hari3 = "Rabu";
$hari4 = "Kamis";
$hari5 = "Jumat";
$hari6 = "Sabtu";
$hari7 = "Minggu";

$hariIni = date("l"); // mengambil hari saat ini
$hariIndonesia = array(
    "Monday" => $hari1,
    "Tuesday" => $hari2,
    "Wednesday" => $hari3,
    "Thursday" => $hari4,
    "Friday" => $hari5,
    "Saturday" => $hari6,
    "Sunday" => $hari7
);

echo $hari1 . "<br>";
echo $hari2 . "<br>";
// ... dst
?>