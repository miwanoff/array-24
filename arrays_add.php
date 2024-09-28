<?php

$arr = [1, 2, 3, 4];
$arr_copy = &$arr;
foreach ($arr as &$value) {
    echo $value . "- before \n";
    $value = $value * 2;
    echo $value . " - after \n";
}

//print_r($arr);
foreach ($arr as $key => $value) {
    echo "$key" . "-> " . "$value\n";
}
echo "Copy:\n";
foreach ($arr_copy as $key => $value) {
    echo "$key" . "-> " . "$value\n";
}