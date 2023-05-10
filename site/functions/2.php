<?php
function staining_2($str_2){
    $arr = explode(' ', trim($str_2));
    foreach ($arr as $key => $value){
        if ($key % 2 == 0){
            $arrCol[] = '<span style="color: chocolate">' . $value . '</span>';
        } else {
            $arrCol[] = '<span style="color: cadetblue">' . $value . '</span>';
        }
    }
    $Chet = implode(' ', $arrCol);
    echo $Chet;
}
$str_2 = 'Первое занятие мне очень понравилось. Материал преподносится интересно и атмосфера на занятиях очень комфортная.';
staining_2($str_2);

