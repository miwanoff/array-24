<?php
$books = ["Володар кілець" => ["Толкіен", 1954],
    "Гаррі Поттер та таємна кімната" => ["Джоан Роулінг", 1998],
    "Пригоди Шерлока Холмса" => ["Конан Дойл", 1892],
    "Зло під сонцем" => ["Агата Крісті", 1941],
];

echo "По назві \n";
ksort($books);

print_r($books);

foreach ($books as $name => $book) { // виводимо масив
    echo "$book[0]: \"$name\", $book[1]\n";
}

function year($a,$b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
  if ($a[1] < $b[1])
    return -1;
  elseif ($a[1]==$b[1])
    return 0;
  else
    return 1;
}
echo "По року \n";
uasort($books,"year"); // сортуємо масив за допомогою функції cmp

foreach ($books as $name => $book) { // виводимо масив
    echo "$book[0]: \"$name\", $book[1]\n";
}

function author($a,$b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
  if ($a[0] < $b[0])
    return -1;
  elseif ($a[0]==$b[0])
    return 0;
  else
    return 1;
}
echo "По автору \n";
uasort($books,"author"); // сортуємо масив за допомогою функції cmp

foreach ($books as $name => $book) { // виводимо масив
    echo "$book[0]: \"$name\", $book[1]\n";
}