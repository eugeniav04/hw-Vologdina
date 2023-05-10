<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $data = new DateTime('NOW');
    $hour = $data->format('G');
    if (($hour > 7) && ($hour < 18)){
        echo ' <link rel="stylesheet" href="../styles/style.css"> ';
    }else {
        echo ' <link rel="stylesheet" href="../styles/dark.css"> ';
    }
    ?>
    <title>Моя страница</title>
   <!-- <link rel="stylesheet" href="../Style/style.css">-->
</head>
<body>
<header id="header">
        <div class="cap"></div>
        <div class="menu">
            <ul class="slk">
                <li><a href="grid.html" class="flex">Грид</a></li>
                <li><a href="flowers.php" class="Grid_Flex">Цветы</a></li>
                <li><a href="authorization.php" class="authorization">Авторизация</a></li>
            </ul>
        </div>
</header>
<main id="main">
    <div class="container">
        <div class="photo">
            <img class="pht" src="../image/IMG_20230310_235046_786.jpg" alt="ops">
        </div>
         <div class="bok">
            <div class="fio">
                <h2>Вологдина Евгения</h2></div>
              <div class="info">
                  <div class="me">
                      <?php require_once '../functions/1.php'?>
                  </div>
                  <div class="opinion"><?php require_once '../functions/2.php'?>
                  </div>
              </div>
         </div>
    </div><div class="plug">
        <hr>
        <?php require_once '../functions/3.php'?>
        <?php require_once '../functions/4.php'?>
    </div>
</main>
</body>
</html>