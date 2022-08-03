<?php

declare(strict_types=1);

include ('../db.php');
$link = connectToDatabase();


$author = $link->real_escape_string($_POST["author"]);
$book = $link->real_escape_string($_POST["book"]);
$genre = $link->real_escape_string($_POST["genre"]);
$sqlAdd = "INSERT INTO users (author, book, genre) VALUES ('$author', '$book', '$genre')";

if($author || $book || $genre == null) {
    echo "Заполните все поля!";
    header("refresh:3;url = http://library/AddBook/Add.html");
    die;
}

if($link->query($sqlAdd)){
    echo "Данные успешно добавлены";
    header("refresh:3;url = http://library/");
}

else {
    echo "Ошибка: " . $link->error;
}

$link->close();

