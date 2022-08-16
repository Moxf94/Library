<?php 
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['pass']));



$password = md5($password."asdfgh12345");

$connect = new mysqli("localhost", "root", "root", "register-bd");

$reuslt = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $reuslt->fetch_assoc();
if(count($user) == 0){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");
    

$connect->close();

header('Location: / ');
?>