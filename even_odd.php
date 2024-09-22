<?php

function odd($var)
{
    return $var % 2 != 0;
}

function even($var)
{
    return $var % 2 == 0;
}

$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "even:\n";
print_r(array_filter($array2, "odd"));

echo "even:\n";
print_r(array_filter($array2, "even"));
