<?php
$birthday = '01.11.2004';
echo 'Дата рождения: ' . $birthday . '<br>';
$now = date('d.n.y');
echo 'Сегодня: ' . $now . '<br>';
$arr1 = explode('.', $birthday);
$arr2 = explode(',', $now);
echo 'Я живу уже: ' . $dif = date_diff(date_create($birthday), date_create($now))->days . 'дней';
