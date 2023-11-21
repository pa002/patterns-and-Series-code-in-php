<?php
$n = 5; // Number of lines

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($i % 2 == 0) {
            echo "0";
        } else {
            echo "1";
        }
    }
    echo "\n";
}
?>