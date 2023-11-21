<?php
$n = 5; // Number of lines

for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces
    for ($k = $n - $i; $k >= 1; $k--) {
        echo " ";
    }

    // Print numbers
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }

    echo "\n";
}
?>