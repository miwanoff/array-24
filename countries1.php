<?php

$countries = [
    [
        "name" => "France",
        "capital" => "Paris",
        "area" => 640679,
        "population" => [
            "2000" => 59278000,
            "2010" => 59278000,
        ],
    ],
    [
        "name" => "England",
        "capital" => "London",
        "area" => 130395,
        "population" => [
            "2000" => 58800000,
            "2010" => 63200000,
        ],
    ],
    [
        "name" => "Deutschland",
        "capital" => "Berlin",
        "area" => 357021,
        "population" => [
            "2000" => 82260000,
            "2010" => 81752000,
        ],
    ],
];

for ($i = 0; $i < count($countries); $i++) {
    echo "{$countries[$i]['name']} : {$countries[$i]['capital']} area: {$countries[$i]['area']}  2000: {$countries[$i]['population']['2000']} 2010: {$countries[$i]['population']['2010']}\n";
}

echo "\n";

foreach ($countries as $i => $country) {
    // $number = $i+1;
    echo "$i ";
    //print_r($country);
    //echo $country["name"] . " " . $country["capital"] . " " . $country["area"];

    foreach ($country as $key => $value) {
        echo "$key: ";
        if (!is_array($value)) {
            echo $value . " ";
        }
        else {
            // echo $value["2000"] . " ". $value["2010"];
            foreach ($value as $k => $v) {
                echo "[$k - $v]";
            }
        }
    }
    // foreach ($country as $key => $value)
    // {
    // //   if (!is_array($value))
    // //     echo "$key: $value; ";
    // //   else {
    // //     echo "$key: ";
    // //     foreach ( $value as $k => $v )
    // //       echo "[$k - $v]";
    // //     }
    //  }
    echo ";\n";
}