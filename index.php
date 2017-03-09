<?php
echo '<br><br>';
//Задание №1
echo 'Задание №1';
echo '-------------------------------------------------------------------<br><br>';

$example1 = array('каждый охотник', 'желает знать', 'где сидит', 'фазан');

//echo '<pre>';
//print_r($example1);
//echo '<br><br>';

function stringHandler($arrayStr, $bool = false)
{
    if ($bool === true) {
        echo '<h3>Переменная $bool -> TRUE</h3>';
        return implode("_", $arrayStr);
    } else {
        echo '<h3>Переменная $bool -> FALSE</h3>';
        for ($i = 0; $i <= count($arrayStr) - 1; $i++) {
            echo "<p> $arrayStr[$i] </p>";
        }
    }
}

stringHandler($example1);  //Вариант, когда параметр не задан.

echo stringHandler($example1, true);  //Вариант, когда параметр - true


echo '<br><br>';
//Задание №2
echo 'Задание №2';
echo '-------------------------------------------------------------------<br><br>';

$example2 = array(4, 2, 3);
//echo '<pre>';
//print_r($example2);
//echo '<br><br>';

function arithmetic($arrayInt, $operator)
{
    if (!is_array($arrayInt)) {
        return '<p>Задайте массив чисел первым параметром функции</p>';
    } else {
        $res = $arrayInt[0];   // будем использовать $res при осуществлении указанной арифм. операции
        for ($i = 1; $i <= count($arrayInt) - 1; $i++) {
            if (!is_int($arrayInt[$i])) {
                return '<p>Элемент массива должен быть числом</p>';
            } else {
                if ($operator === '+') {
                    $res = $res + $arrayInt[$i];
                } elseif ($operator === '-') {
                    $res = $res - $arrayInt[$i];
                } elseif ($operator === '*') {
                    $res = $res * $arrayInt[$i];
                } elseif ($operator === '/') {
                    $res = $res / $arrayInt[$i];
                } else {
                    return 'Второй параметр должен определять операцию';
                    break;
                }
            }
        }
        return 'Результат: ' . $res;
    }
}

echo arithmetic($example2, '+');


echo '<br><br>';
//Задание №3
echo 'Задание №3';
echo '-------------------------------------------------------------------<br><br>';

function calcEverything()
{
    $argArray = func_get_args();

    for ($j = 1; $j <= count($argArray) - 1; $j++) {
        if (!is_int($argArray[$j]) && !is_float($argArray[$j])) {
            die('Ошибка: параметры функции, начиная со второго, должны быть числами');
        }
    }

    if ($argArray[0] === '+') {
        $sum = $argArray[1];
        echo "$argArray[1]";
        for ($i = 2; $i <= count($argArray) - 1; $i++) {
            $sum = $sum + $argArray[$i];
            echo " + $argArray[$i]";
        }
        echo " = $sum";
    } elseif ($argArray[0] === '-') {
        $sum = $argArray[1];
        echo "$argArray[1]";
        for ($i = 2; $i <= count($argArray) - 1; $i++) {
            $sum = $sum - $argArray[$i];
            echo " - $argArray[$i]";
        }
        echo " = $sum";
    } elseif ($argArray[0] === '*') {
        $sum = $argArray[1];
        echo "$argArray[1]";
        for ($i = 2; $i <= count($argArray) - 1; $i++) {
            $sum = $sum * $argArray[$i];
            echo " * $argArray[$i]";
        }
        echo " = $sum";
    } elseif ($argArray[0] === '/') {
        $sum = $argArray[1];
        echo "$argArray[1]";
        for ($i = 2; $i <= count($argArray) - 1; $i++) {
            $sum = $sum / $argArray[$i];
            echo " : $argArray[$i]";
        }
        echo " = $sum";
    } else {
        echo '<p>Ошибка: первый параметр функции должен быть математической операцией</p>';
    }
}

calcEverything('/', 4.2, 2, 2);


echo '<br><br>';
//Задание №4
echo 'Задание №4';
echo '-------------------------------------------------------------------<br><br>';


function multipicationTable($vertical, $horizontal)
{
    if (!is_int($vertical) && !is_int($horizontal)) {
        die('Ошибка: параметры должны быть целыми числами');
    }
    echo '<table border="1">';
    for ($i = 1; $i <= $vertical; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $horizontal; $j++) {
            $result = $i * $j;
            echo "<td align='center'> $result</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}


multipicationTable(8, 8);


echo '<br><br>';
//Задание №5
echo 'Задание №5';
echo '-------------------------------------------------------------------<br><br>';


function isPalindrom($str)
{
    $trimStr = str_replace(' ', '', $str);
    echo "$trimStr<br>";
    echo $revTrimStr = utf8_strrev($trimStr) . '<br>';


    if (strcasecmp($trimStr, $revTrimStr)) {
        return true;
    } else {
        return false;
    }
}

function utf8_strrev($str)
{
    preg_match_all('/./u', $str, $ar);
    return join('', array_reverse($ar[0]));
}


// функция должна работать с кириицей
// отрабатывать что полиндром на эти предложения
// Удавы рвали лавры в аду
//Кит на море романтик
//Лёша на полке клопа нашёл
//И любит Сева вестибюли
$func = isPalindrom('Кит на море романтик');  //присвоим результат функции переменной

function descResult($fun)
{
    if ($fun == true) {
        echo 'Строка является палиндромом (при условии, что не учитывается регистр и пробелы)';
    } else {
        echo 'Строка не является палиндромом';
    }
}

descResult($func);    // выводим и описываем результат функции


echo '<br><br>';
//Задание №6
echo 'Задание №6';
echo '-------------------------------------------------------------------<br><br>';

date_default_timezone_set('Europe/Moscow');
echo 'Текущее время - ' . date('Y-m-d H:i:s') . '<br><br>';

echo 'unixtime время, соответствующее 24.02.2016 00:00:00,   -  >'
    . $t = strtotime('24.02.2016 00:00:00') . '<br>';
//echo date('Y-m-d H:i:s', $t);   для проверки


echo '<br><br>';
//Задание №7
echo 'Задание №7';
echo '-------------------------------------------------------------------<br><br>';

$str7_1 = 'Карл у Клары украл Кораллы ';

$oneLetter = '';
for ($i = 0; $i <= mb_strlen($str7_1); $i++) {
    $x = mb_substr($str7_1, $i, 1);
    if ($x === 'К') {
        continue;
    } else {
        $oneLetter .= $x;
    }
}

echo $oneLetter;

echo '<br><br>';

$str7_2 = 'Две бутылки лимонада';

echo str_replace('Две', 'Три', $str7_2);


echo '<br><br>';
//Задание №8
echo 'Задание №8';
echo '-------------------------------------------------------------------<br><br>';

$rx = 'RX packets:95011 errors:0 dropped:0 :) overruns:0 frame:0.';

function RXpackets($rxString)
{
    if (preg_match('/packets:[0-9]+/', $rxString, $matches)) {
        preg_match('/[0-9]+/', $matches[0], $packets);
        settype($packets[0], 'int');
        //var_dump($packets[0]);  //для проверки
        if (preg_match('/ :[)] /', $rxString, $matches1)) {
            smileASCII();
        } else {
            if (1000 < $packets[0]) {
                echo 'Сеть есть';
            } else {
                echo 'Количество переданных пакетов меньше 1000.';
            }
        }
    } else {
        echo 'Совпадений не найдено.';
    }
    //print_r($matches);   //для проверки
}

function smileASCII()
{
    echo '<pre>
             OOOOOOOOOOO
         OOOOOOOOOOOOOOOOOOO
      OOOOOO  OOOOOOOOO  OOOOOO
    OOOOOO      OOOOO      OOOOOO
  OOOOOOOO  #   OOOOO  #   OOOOOOOO
 OOOOOOOOOO    OOOOOOO    OOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOO  OOOOOOOOOOOOOOOOOOOOOOOOO  OOOO
 OOOO  OOOOOOOOOOOOOOOOOOOOOOO  OOOO
  OOOO   OOOOOOOOOOOOOOOOOOOO  OOOO
    OOOOO   OOOOOOOOOOOOOOO   OOOO
      OOOOOO   OOOOOOOOO   OOOOOO
         OOOOOO         OOOOOO
             OOOOOOOOOOOO
           </pre>';
}

RXpackets($rx);


echo '<br><br>';
//Задание №9
echo 'Задание №9';
echo '-------------------------------------------------------------------<br><br>';


function showFileContent($filename)
{
    $descriptor       = fopen($filename, 'r');
    echo $fileContent = fgets($descriptor);
}

//$filename = 'test.txt';
showFileContent('test.txt');


echo '<br><br>';
//Задание №10
echo 'Задание №10';
echo '-------------------------------------------------------------------<br><br>';


$descriptor = fopen('anothertest.txt', 'w');
echo fwrite($descriptor, 'Hello again!') . ' байтов информации записано в файл anothertest.txt';
