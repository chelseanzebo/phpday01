<?php
$a = 10;
$b = 20;

[$a, $b] = [$b, $a];

echo $a; // => 20
echo $b; // => 10