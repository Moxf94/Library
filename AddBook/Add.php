<?php
$link = mysqli_connect("localhost","root","root", "test_db");

if ($link == false)
{
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());

}

    $author = $link->real_escape_string($_POST["author"]);
    $book = $link->real_escape_string($_POST["book"]);
    $genre = $link->real_escape_string($_POST["genre"]);
    $sqlAdd = "INSERT INTO users (author, book, genre) VALUES ('$author', '$book', '$genre')";

    if(null === $author || 
       null === $book || 
       null === $genre )
    {
        echo "Заполните все поля!";
        header("refresh:3;url = http://library/AddBook/Add.html");
        die;
    }

    if($link->query($sqlAdd)){
        echo "Данные успешно добавлены";
        header("refresh:3;url = http://library/");

    } 

    else
    {
        echo "Ошибка: " . $link->error;
    }

    $link->close();

    ?>