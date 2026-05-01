<?php
$angka = array("12","13","15","16","67","189","346","876","54232","3256") ;
foreach ($angka as $value) {
    if ($value % 2 == 0) {
        echo $value . " adalah bilangan genap.<br>";
    } else {
        echo $value . " adalah bilangan ganjil.<br>";
    }
}
?>