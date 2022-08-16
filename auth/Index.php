<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            //require_once 'validation_form/auth.php';
            if(($_COOKIE['user'] ?? '') === ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1> 
                <form action="validation_form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <button class="btn btn-primary" type="submit">Зарегестрировать</button>
                </form>
            </div>
        
    
    <div class="col">
        <h1>Форма авторизации</h1> 
        <form action="validation_form/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-primary" type="submit">Авторизоваться</button>
        </form>
    </div>

    <?php else: ?>
    <p> Привет, <?=$_COOKIE['user'] ?>. Чтобы выйти, нажмите <a href="/exit.php">Здесь</a></p>

    <?php endif; ?>
        </div>
            </div>
        
</body>
</html>