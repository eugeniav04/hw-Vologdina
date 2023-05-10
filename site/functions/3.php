<?php
$str_3 = strip_tags(file_get_contents("../php/homework1.php"));
$str_3 = $str_1 . ' ' . $str_2 . ' ' . $str_3;
$vowels = preg_match_all('/[АаЁёУуЕеОоЯяИиЮюЭэЫы]/u', $str_3);
echo 'Количество гласных в тексте = ' . $vowels . '<br>';
$word = preg_replace("/[[:punct:]]/", '', $str_3);
$word = mb_ereg_replace('[\s]+', ' ', $word);
$words = explode(' ', $word);
echo 'Количество слов на сайте = ' . count($words) . '<br>';