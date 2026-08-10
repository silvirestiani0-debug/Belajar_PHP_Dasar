<?php
// Mendefinisikan array multidimensi menggunakan []
$orang = [
    ["Nama" => "lala", "Umur" => 25],
    ["Nama" => "lili", "Umur" => 30],
    ["Nama" => "lulu", "Umur" => 35]
];
echo $orang[0]["Nama"] . " berumur " . $orang[0]["Umur"] . " tahun.<br>"; // Output: lala berumur 25 tahun.
echo $orang[1]["Nama"] . " berumur " . $orang[1]["Umur"] . " tahun.<br>"; // Output: lili berumur 30 tahun.
?>
