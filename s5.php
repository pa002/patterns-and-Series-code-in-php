<?php

$n = 5; // The number of rows in the pattern

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n";
}

?>
