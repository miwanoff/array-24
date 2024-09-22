<?php

$countries = [
    "Belgium" => [
        "French",
        "Dutch",
        "German",
    ],
    "United Kingdom" => "English",
    "Switzerland" => [
        "German",
        "French",
        "Italian",
    ],
    "Germany" => "German",
    "Italy" => "Italian",
];

$languages = [];
foreach ($countries as $country => $lang) {
    echo $country . "\n";
    //print_r($lang);

    if (is_array($lang)) {
        foreach ($lang as $l) {
            echo $l . " ";
        }
    }
    else {
        echo $lang;
    }
    echo "\n";
}

foreach ($countries as $country => $lang) {
    if (!is_array($lang)) {
        $languages[$lang][] = $country;
    }
    else{
        foreach ($lang as $l) {
            $languages[$l][] = $country;
        }
    }
}

print_r($languages);