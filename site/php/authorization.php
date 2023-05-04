<?php
$userArray = ["Tom" => md5("123"), "Bob" => md5("456")];

if (isset($_POST["login"]) && isset($_POST["password"])){
    $login = $_POST["login"];
    $pass = md5($_POST["password"]);
    if(array_key_exists($login, $userArray) && $userArray[$login] == $pass){
        $_POST["password"] = $pass;
        header('Location: ' . 'sayHello.php?login=' . $login);
    }else{
        echo "<b>Неправильно набран логин или пароль</b>";
        echo "<br>";
        echo "<br>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
   <form action="" method="post">
       <legend>Логин</legend>
       <input type="text" name="login">
       <legend>Пароль</legend>
       <input type="password" name="password"><br>
       <br>
       <input type="submit" name="button" value="Отправить">
       <br>
       <a href="">Регистрация</a>
   </form>
</body>
</html>
