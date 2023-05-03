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
                <li><a href="form.php" class="authorization">Авторизация</a></li>
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
                      <?php
                      $color = "red";
                      $str = 'Всем привет! Расскажу немного о себе. Я учусь в колледже связи ПГУТИ на 3 курсе. С недавнего времени заинтересовалась веб-разработкой и решила попробовать что-то новое для себя. В свободное время люблю смотреть фильмы и сериалы. Так же мне нравится путешествовать, но пока с этим немного проблематично(((';
                      echo '<div style = "color:'.$color.'">'.'Всем привет!'.'</div>' . $str;
                      ?>
                  </div>
                <div class="opinion">
                Первое занятие мне очень понравилось. Материал преподносится
                    интересно и атмосфера на занятиях очень комфортная.
                </div>
              </div>
         </div>
    </div>
</main>
    <div class="container_1">
        <div class="tab_1">
            <div class="one">
                <div class="picture">
                    <img src="https://sun9-84.userapi.com/s/v1/if2/FJ1qhoZOT-P0T1fuQtEZtqGP21R01029XgN9t1nxpUsJRkp9v-NmL5TGr7oero-mh4CaX1uiaSNMZ81I1tDn7qOq.jpg?size=604x429&quality=96&type=album" alt="ops">
                </div>
                <div class="text">Ромашка – это небольшой цветок, растущий повсеместно в наших широтах.</div>
            </div>
            <div class="one">
                <div class="picture">
                    <img src="https://www.maam.ru/images/users/avatars/37620ec068b66cb023857ebb5490d3e7.jpg" alt="ops">
                </div>
                <div class="text">Роза считается царицей всех цветов. Это растение с красивыми, пышными цветами разной окраски.</div>
            </div>
            <div class="one">
                <div class="picture">
                    <img src="https://i.7fon.org/320/b306174.jpg" alt="ops">
                </div>
                <div class="text">Тюльпан - нежный весенний цветок. У него три или четыре длинных и заостренных листочка. </div>
            </div>
            <div class="one">
                <div class="picture">
                    <img src="https://i.artfile.ru/s/1209880_140817_97_ArtFile_ru.jpg" alt="ops">
                </div>
                <div class="text">Георгин является многолетним растением с клубневидно-утолщенным корнем.</div>
            </div>
        </div>
    </div>
    <div class="container_2">
        <div class="grid">
            <div class="two">
                <div class="picture_one">
                    <img src="https://sun9-84.userapi.com/s/v1/if2/FJ1qhoZOT-P0T1fuQtEZtqGP21R01029XgN9t1nxpUsJRkp9v-NmL5TGr7oero-mh4CaX1uiaSNMZ81I1tDn7qOq.jpg?size=604x429&quality=96&type=album" alt="ops">
                </div>
                <div class="text_one">
                    <p>Ромашка – это небольшой цветок, растущий повсеместно в наших широтах.</p>
                </div>
            </div>
            <div class="two">
                <div class="picture_one">
                    <img src="https://www.maam.ru/images/users/avatars/37620ec068b66cb023857ebb5490d3e7.jpg" alt="ops">
                </div>
                <div class="text_one">Роза считается царицей всех цветов. Это растение с красивыми, пышными цветами разной окраски.</div>
            </div>
            <div class="two">
                <div class="picture_one">
                    <img src="https://i.7fon.org/320/b306174.jpg" alt="ops">
                </div>
                <div class="text_one">Тюльпан - нежный весенний цветок. У него три или четыре длинных и заостренных листочка. </div>
            </div>
            <div class="two">
                <div class="picture_one">
                    <img src="https://i.artfile.ru/s/1209880_140817_97_ArtFile_ru.jpg" alt="ops">
                </div>
                <div class="text_one">Георгин является многолетним растением с клубневидно-утолщенным корнем.</div>
            </div>
        </div>
    </div>
</body>
</html>