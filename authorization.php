<?php
var_dump($_POST);
$login = $_POST["login"];
$password = $_POST["password"];
include "oper.php";
if (!empty($password) and !empty($login)) {
    auth($login, $password);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
    <body>

        <div>
            <div>
                <h3>Регистрация</h3>
                <form method="post">
                    <label>Логин</label>
                    <input type="login" name="login" required>
                    <br>
                    <br>
                    <label>Пароль</label>
                    <input type="password" name="password" required>
                    <br>
                    <br>
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>

    </body>
</html>
