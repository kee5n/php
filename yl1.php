<?php

$EEK = (float) readline("Sisesta summa kroonides: ");

$euro = $EEK / 15.6466;

$euro = round($euro, 2);

echo "Summa eurodes: $euro €" .PHP_EOL;

?>