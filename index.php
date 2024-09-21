<?php
$array_words = [
    "first" => "hello",
    "last" => "goodbye",
    "add" => "sorry",
];

//echo $array_words["add"];

$array_words1 = [
    1 => "hello",
    2 => "goodbye",
    3 => "sorry",
];

$array_words2 = [
    1 => "hello",
    "goodbye",
    "sorry",
    "bye",
];

//echo $array_words2[3];

//$array_words[5] = "bye";
$array_words[] = "bye";

print_r($array_words);

var_dump($array_words);

$juices ["apple"]["green"] = "20";
$juices ["apple"]["red"] = "25";
$juices ["pear"]["yellow"] = "30";
$juices ["pear"]["green"] = "30";

print_r ($juices);

$cars = ["Volvo","BMW","Toyota"]; 

for ($x = 0; $x < count($cars); $x++) { 
  echo "$x {$cars[$x]}"; 
  echo "\n"; 
}

foreach ($cars as $key => $car) {     
    echo "$key $car \n";
  }