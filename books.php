<?php
$books = ["Володар кілець" => ["Толкіен", 1954],
    "Гаррі Поттер та таємна кімната" => ["Джоан Роулінг", 1998],
    "Пригоди Шерлока Холмса" => ["Конан Дойл", 1892],
    "Зло під сонцем" => ["Агата Крісті", 1941],
];

echo "<p>По назві</p>\n";
ksort($books);

// print_r($books);

// foreach ($books as $name => $book) { // виводимо масив
//     echo "$book[0]: \"$name\", $book[1]\n";
// }

array_walk($books, "print_books");

function year($a,$b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
  // if ($a[1] < $b[1])
  //   return -1;
  // elseif ($a[1]==$b[1])
  //   return 0;
  // else
  //   return 1;
  return ($a[1] <=> $b[1]);
}
echo "<p>По року</p>\n";
uasort($books,"year"); // сортуємо масив за допомогою функції cmp

// foreach ($books as $name => $book) { // виводимо масив
//     echo "$book[0]: \"$name\", $book[1]\n";
// }

array_walk($books, "print_books");

function author($a,$b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
  if ($a[0] < $b[0])
    return -1;
  elseif ($a[0]==$b[0])
    return 0;
  else
    return 1;
}
echo "<p>По автору</p>\n";
uasort($books,"author"); // сортуємо масив за допомогою функції cmp

// foreach ($books as $name => $book) { // виводимо масив
//     echo "$book[0]: \"$name\", $book[1]\n";
// }

function print_books($info, $book){
  $str = "<h2>\"$book\"</h2>\n";
  $str .= "<p>автор: $info[0], рік: $info[1]</p>\n";
  // echo "<h2>\"$book\": автор $info[0], рік $info[1]</h2>\n";
  echo $str;
}

array_walk($books, "print_books");