<?php

$a = readline("Sisesta arv: ");
$b = readline("Sisesta arv: ");
$c = readline("Sisesta arv: ");

if ($a > $b and $a > $c) {
    echo "Suurim arv on $a" .PHP_EOL;
} if ($b > $a and $b > $c) {
    echo "Suurim arv on $b" .PHP_EOL;
} if ($c > $a and $c > $b) {
    echo "Suurim arv on $c". PHP_EOL;
}