<?php

$rad = (float) readline("Sisesta raadius: ");

$p = 2 * pi() * $rad;

$s = pi() * $rad ** 2;

echo "Ümbermõõt ", round($p), " cm" .PHP_EOL;
echo "Pindala ", round($s), " cm" .PHP_EOL;
?>