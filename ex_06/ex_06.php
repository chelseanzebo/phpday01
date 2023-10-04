<?php

$func = function (string $str1) {
    $str1 = strtoupper($str1);
    echo $str1;
};

$func ("phrase en majuscule");