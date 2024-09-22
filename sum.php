<?php
// $arr1 = [4, 0, -5, 8];
// // $arr2 = [6, -22, 5, 1];

// echo min($arr1);

$arr = [
    [1, 5, 7, 0], 
    [0, -3, 2, -8], 
    [9, 4, 1, 4]
];

// echo $arr[0][2]."\n";
$sum = 0;
for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr[$i]); $j++) { 
        echo $arr[$i][$j]." ";
        
        $sum += $arr[$i][$j];
    }
    echo "\n";
}