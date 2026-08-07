<?php
$orang = [
    ["Nama" => "ruby", "Umur" => 25],
    ["Nama" => "bella", "Umur" => 30],
    ["Nama" => "xavi", "Umur" => 35]
];

foreach ($orang as $individu) {
    echo $individu["Nama"] . " berumur " . $individu["Umur"] . " tahun.<br>";
}
?>