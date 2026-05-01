// Soal 3 :
// a.Menampilkan poin siswa dengan noor urut 5
// b.Menampilkan siswa dengan poin 90
// c.Menampilkan siswa dengan poin 100
// Menggunakan perulangan dan if

<?php
$siswa = array(
    array("no"=>1, "poin"=>75, "nama"=>"Adi"),
    array("no"=>2, "poin"=>80, "nama"=>"Joni"),
    // ... dst
    array("no"=>6, "poin"=>90, "nama"=>"Budi"),
);

// a) Tampilkan poin siswa nomor urut 5
echo "Poin siswa no.5: " . $siswa[4]['poin'] . "<br>";

// b) Tampilkan siswa dengan poin 90
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo $s['nama'] . "<br>";
    }
}

// c) Tampilkan siswa dengan poin 100
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo $s['nama'] . "<br>";
        $ada = true;
    }
}
if (!$ada) echo "Tidak ada siswa dengan poin 100";
?>