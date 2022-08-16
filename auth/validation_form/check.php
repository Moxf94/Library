<?php
$name = filter_var(trim($_POST['name']));
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['pass']));

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
}else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
    echo "Недопустима длина имени";
    exit();
}else if(mb_strlen($password) < 2 || mb_strlen($password) > 6){
    echo "Недопустимая длина пароля (от 2 до 6 символов)";
    exit();
}

$password = md5($password."asdfgh12345");

$connect = new mysqli("localhost", "root", "root", "register-bd");
$connect->query("INSERT INTO `users` (`login`,`password`, `name`)
VALUES('$login','$password', '$name')");

$connect->close();

header('Location: / ');
?>