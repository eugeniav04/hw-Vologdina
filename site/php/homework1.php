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
                      Всем привет! Расскажу немного о себе. Я учусь в колледже связи ПГУТИ на 3 курсе. С недавнего времени заинтересовалась веб-разработкой и решила попробовать что-то новое для себя. В свободное время люблю смотреть фильмы и сериалы. Так же мне нравится путешествовать, но пока с этим немного проблематично(((
                  </div>
                <div class="opinion">
                Первое занятие мне очень понравилось. Материал преподносится
                    интересно и атмосфера на занятиях очень комфортная.
                </div>
              </div>
         </div>
    </div>
</main>
</body>
</html>