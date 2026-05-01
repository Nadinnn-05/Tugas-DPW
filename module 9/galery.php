<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .gambar {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px;
        }
        .gambar img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h2>Galeri Gambar</h2>
<div class="gambar">
<?php
$fileList = glob(pattern: 'gambar/*.{jpg,jpeg,png,gif}', flags: GLOB_BRACE);
foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo '<img src="' . $filename . '" alt="' . basename($filename) . '">';
    }
}
?>
</div>
</body>
</html>