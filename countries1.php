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
        } else {
            // echo $value["2000"] . " ". $value["2010"];
            foreach ($value as $k => $v) {
                echo "[$k - $v]";
            }
        }
    }
    echo ";\n";
}

function name($a, $b)
{
    if ($a["name"] < $b["name"]) {
        return -1;
    } elseif ($a["name"] == $b["name"]) {
        return 0;
    } else {
        return 1;
    }
}

function average($a, $b)
{ // функция, определяющая способ сортировки (по сумме населения за 2000 и за 2010 годы)
    if ($a["population"]["2000"] + $a["population"]["2010"] < $b["population"]["2000"] + $b["population"]["2010"]) {
        return -1;
    } elseif ($a["population"]["2000"] + $a["population"]["2010"] == $b["population"]["2000"] + $b["population"]["2010"]) {
        return 0;
    } else {
        return 1;
    }

}

function print_country($country, $key_country, $data)
{
    // static $i=1; // статическая глобальная переменная-счетчик
    echo $data . " ";
    foreach ($country as $key => $value) {
        if (!is_array($value)) {
            echo "$key:$value\t";
        } else {
            echo "$key: ";
            foreach ($value as $k => $v) {
                echo "[{$k} год. - $v] ";
            }

        }
    }
    echo "Average population: " . array_sum($country['population']) / count($country['population']);
    echo "\n";

    // $i++;
}

echo "№  Назва\tСтолиця\t\tПлоща\t\tНаселення\n";
array_walk($countries, "print_country", "№");

uasort($countries, "name");

echo "№  Назва\tСтолиця\t\tПлоща\t\tНаселення\n";
array_walk($countries, "print_country", "№");