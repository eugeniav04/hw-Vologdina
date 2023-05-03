<?php
//Урок 3-4, слайд 23
//Задание 1
//Дана последовательность элементов от 1 до 30.
//Необходимо вывести на экран числа, кратные 2.
//Каждое число должно быть с новой строки.
echo '<hr>';
echo "Урок 3-4 Слайд 23" . '<br>';
echo "Задача 1" . '<br>';
for($i = 2; $i <= 30; $i+=2){
    echo $i . '<br>';
}
//Задание 2
//Дана последовательность элементов от 1 до 50.
//Необходимо сделать курсивом каждый элемент, кратный 3.
//Числа, одновременно кратные 3 и 5, сделать жирным.
echo '<hr>';
echo "Задача 2" . '<br>';
for($i = 1; $i <= 50; $i++){
    if ($i % 3 == 0) {
        if ($i % 5 == 0) {
            echo '<b>' . $i . '</b>' . '<br>';
        } else {
            echo '<i>' . $i . '</i>' . '<br>';
        }
    }
}
//Задача 3.
//Число Пи вычисляется по формуле Грегори следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...),
//причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи.
//Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01.
echo '<hr>';
echo "Задача 3" . '<br>';
$a = 1;
$b = 1;
$count = 0;
$mul = 0;
do{
    $mul = $mul  + $a / $b;
    $pi = 4 * $mul;
    $a = -1 * $a;
    $b += 2;
    $count++;
} while(round($pi, 2) != 3.14);
echo 'Минимальное количество слагаемых: ' . $count;

//Задание 4.
//Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4,... .
//Какое минимальное количество элементов последовательности нужно сложить,
//чтобы сумма превысила заданное число S > 10?
echo '<hr>';
echo "Задача 4" . '<br>';
$a = 1;
$b = 1;
$s = 1;
for($i = 0;$s < 10;){
    $a += ($a + 3);
    $b += ($a / $b);
    $s += ($a / $b);
    ++$i;
} echo  "Количество элементов = ". $i . "<br>";
//Урок 5-6, слайд 15.
//Задача 1.
//Дан массив с элементами 50, 45, 40, 35, 30.
//Найдите сумму элементов этого массива.
//Запишите ее в переменную $result.
echo '<hr>';
echo "Урок 5-6 Слайд 15" . '<br>';
echo "Задача 1" . '<br>';
$j = 50;
$arr3 = [];
for($i = 0;$i < 5; $i++){
    $arr3[$i] = $j - $i * 5;
    echo $arr3[$i] . " ";
}
$sum = 0;
for($i = 0;$i < 5; $i++){
    $sum += $arr3[$i];
}
echo "<br>" . "Сумма эл-тов = " . $sum . "<br>";
//Задание 2.
//Дан массив, заполненный случайными числами.
//Необходимо вывести массив, заполненный случайными числами.
//После чего вывести данный массив в противоположном порядке.
echo '<hr>';
echo "Задача 2" . '<br>';
$arr4 = [];
for($i = 0;$i < 10; $i++){
    $arr4[$i] = mt_rand(0,10);
    echo $arr4[$i] . " ";
}
echo "<br>" . "reverse" . '<br>';
for($i = count($arr4)-1; $i >= 0; $i--){
    echo $arr4[$i] . ' ';
}
//Задание 3.
//Создать массив, заполненный названиями картинок, например, 1.png.
//Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
echo '<hr>';
echo "Задача 3" . '<br>';
$dir = ["1.png", "2.png", "3.png", "4.png"];
$i = mt_rand(0, 3);
echo $dir[$i];
//Задние 4.
//Дано N действительных случайных чисел в диапазоне от -100 до 100.
//Найти минимальное положительное число и максимальное отрицательное число.
echo '<hr>';
echo "Задача 4" . '<br>';
$n = 10;
$arr = [];
$p = mt_rand(-100,100);
for ($i =0; $i <= $n;$i++){
    $arr[$i] = mt_rand(-100,100);
}
$min = 100;
$max = -100;
for ($i = 0; $i < count($arr);$i++){
    if ($arr[$i] > 0 and $min > $arr[$i]){
        $min = $arr[$i];
    }
    elseif($arr[$i] < 0 and $max < $arr[$i]){
        $max = $arr[$i];
    }
}
print_r($arr);
echo '<br>';
echo "Минимальное из положительных: " . $min . '<br>' . "Максимальное из отрицательных: " . $max;
/*for($i = 10; $i++){
    $n[$i] = mt_rand(-100,100);
    echo '<br>';
    print_r ($n[$i]);
    $min = min(0,100);
    $max = max(-100,0);
    echo '<br>' . 'Минимальное из положительных: ' . $min;
    echo '<br>' . 'Максимальное из отрицательных: ' . $max;
}*/
echo '<hr>';
echo "Урок 5-6 Слайд 16" . '<br>';
echo "Задача 5" . '<br>';
//5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
//Найти среднюю в группе оценку по каждому из предметов.
//Суммирование оценок по каждому предмету.
$arrPred = [
    'Petrov' => ['mathematics' => 5, 'physics' => 4, 'chemistry' => 3, 'informatics' => 5],
    'Ivanov' => ['mathematics' => 4, 'physics' => 3, 'chemistry' => 5, 'informatics' => 5],
    'Smirnov' => ['mathematics' => 4, 'physics' => 3, 'chemistry' => 4, 'informatics' => 3],
    'Sobolev' => ['mathematics' => 4, 'physics' => 4, 'chemistry' => 3, 'informatics' => 4]
];
echo '<pre>';
print_r($arrPred);
echo '</pre>';
$mathCount = 0;
$physCount = 0;
$chemCount = 0;
$infoCount = 0;
$arrMarkTotal = [];
foreach ($arrPred as $key => $value){
    foreach ($value as $subject => $mark){
        switch ($subject){
            case 'mathematics';
                $arrMarkTotal[$subject] = ["Сумма оценок" => $mathCount += $mark];
                break;
            case 'physics';
                $arrMarkTotal[$subject] = ["Сумма оценок" => $physCount += $mark];
                break;
            case 'chemistry';
                $arrMarkTotal[$subject] = ["Сумма оценок" => $chemCount += $mark];
                break;
            case 'informatics';
                $arrMarkTotal[$subject] = ["Сумма оценок" => $infoCount += $mark];
                break;
        }
    }
}
foreach ($arrMarkTotal as $subject => $subjectMarksArr){
    foreach ($subjectMarksArr as $key => $value){
        $temp = $value / sizeof($arrPred);
        $arrMarkTotal[$subject] += ["Средняя оценка" => $temp];
    }
}
echo '<pre>';
print_r($arrMarkTotal);
echo '</pre>';