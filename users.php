<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];

$users = array_merge_recursive($users2, $users1);

print_r($users);
$keys = array_intersect_key($users1, $users2);
$add = array_intersect_key($users, $keys);
print_r($keys);

print_r($add);

$lottery = [];
$lottery = range(0, 9);

print_r($lottery);