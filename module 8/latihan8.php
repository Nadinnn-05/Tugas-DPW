<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("martin", "keonho", "james"),
    "1D" => array("dpr ian", "haechan", "mark")
);
// menampilkan data array
print_r($array);           
// menampilkan kelas 1C
print_r($array['1C']);     
// menampilkan kels 1D dengan index 0
print_r($array['1D']);     
// tampilkan "martin"
echo $array['1C'][0];      
// tampilkan "mark"
echo $array['1D'][2];  

// data kelas bisa diulis juga dengan
$array = [
    "1C" => ["martin", "keonho", "james"],
    "1D" => ["dpr ian", "haechan", "mark"]
];