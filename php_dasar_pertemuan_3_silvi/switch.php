<?php
$ukuran = "L";

switch ($ukuran) {
    case "S":
        echo "Ukuran Kecil";
        break;
    case "M":
        echo "Ukuran Sedang";
        break;
    case "L":
        echo "Ukuran Besar";
        break;
    default:
        echo "Ukuran tidak tersedia";
}