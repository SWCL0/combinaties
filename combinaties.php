<?php

// telt op
for ($i = 0; $i < 1000; $i++) {
    // getallen met 3 characters weergeven
    echo str_pad($i, 3, "0", STR_PAD_LEFT) . PHP_EOL;
}

?>