<?php

$persons = ["Нікітін", "Петенко", "Середа","Васильковський", "Михайлів", "Іваненко","Сидоренко"];

$triples = array_chunk($persons,4);
print_r($triples);