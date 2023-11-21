<?php
$n = 5; // Number of lines

for ($i = 1; $i <= $n; $i++) {
    // Print leading spaces
    for ($k = 1; $k < $i; $k++) {
        echo " ";
    }

    // Print numbers
    for ($j = $i; $j <= $n; $j++) {
        echo $j;
    }

    echo "\n";
}
?>