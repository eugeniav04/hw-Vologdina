<?php
//1. Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User".
//После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из кук)
setcookie('login1', 'User', time() + 3600);
echo '1 задание';
echo "<br>";
echo "Hello, " . $_COOKIE['login1'] . "<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <p><?php
        //2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час.
        //Примечание: возможно понадобится форма для ввода логина.
        setcookie('login', $login = $_GET['loginForm'], time() + 3600);
        setcookie('lastVisit', date('H:i'), time() + 3600 * 24 * 7, '/');
        echo '2 задание.';
        echo "<br>";
        if (isset($_GET['loginForm'])){
            echo 'Hello, ' . $login . "|" . $_COOKIE['lastVisit'];
        } else {
            echo 'Hello, Anonim';
        }
        ?>
    </p>
    <p>
        <label>Login</label><br>
        <input type="text" name="loginForm">
    </p>
    <p>
        <input type="submit" name="button">
    </p>
</form>
<?php
//3. Сделайте счетчик посещения сайта посетителем.
//Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
setcookie('count', $count = isset($_COOKIE['count']) ? $_COOKIE['count'] : 0);
$count++;
echo '3 задание.';
echo "<br>";
echo "Вы посетили страницу: " . $count;
echo "<br>";
?>
</body>
</html>
