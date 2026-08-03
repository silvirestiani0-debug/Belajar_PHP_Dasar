<?php

$a = 25;
$b = 25;

// Operator Perbandingan
echo var_export($a == $b, true) . "<br>";   // Sama dengan (==) -> true
echo var_export($a === $b, true) . "<br>";  // Identik (===) -> true
echo var_export($a != $b, true) . "<br>";   // Tidak sama dengan (!=) -> false
echo var_export($a !== $b, true) . "<br>";  // Tidak identik (!==) -> false
echo var_export($a > $b, true) . "<br>";    // Lebih besar dari (>) -> false
echo var_export($a < $b, true) . "<br>";    // Lebih kecil dari (<) -> false
echo var_export($a >= $b, true) . "<br>";   // Lebih besar atau sama dengan (>=) -> true
echo var_export($a <= $b, true) . "<br>";   // Lebih kecil atau sama dengan (<=) -> true

?>