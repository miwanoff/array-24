<?php

$books = [
    "Джоан Роулінг"=>"Гаррі Поттер та таємна кімната",
    "Конан Дойл"=>"Пригоди Шерлока Холмса",
    "Толкіен"=>"Володар кілець"
  ];


  function print_books($book, $author, $prefix){
    echo "<h2>$prefix \"$book\": $author</h2>\n";
  }

  array_walk($books, "print_books", "Book");