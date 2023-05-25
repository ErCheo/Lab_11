<?php

function z1()
{
    $var = 'hello';
    echo $var[0] . ', ' . $var[1] . ', ' . $var[4] . "<br/>";
}

function z2()
{
    $seconds = 60 * 60;
    echo $seconds . ' секунд в часе' . "<br/>";
}

function z3()
{
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo '$var = ' . $var . "<br/>";
}

function z4()
{
    $a = 3;
    echo '$a = ' . $a . "<br/>";
}

function z5()
{
    $a = 10;
    $b = 2;
    $c = $a + $b;
    echo '$a + $b = ' . $c . "<br/>";
    $c = $a - $b;
    echo '$a - $b = ' . $c . "<br/>";
    $c = $a * $b;
    echo '$a * $b = ' . $c . "<br/>";
    $c = $a / $b;
    echo '$a / $b = ' . $c . "<br/>";
}

function z6()
{
    $c = 15;
    $d = 2;
    $result = $c + $d;
    echo '$c + $d = ' . $result . "<br/>";
}

function z7()
{
    $a = 10;
    $b = 2;
    $c = 5;
    $result = $a + $b + $c;
    echo '$a + $b + $c = ' . $result . "<br/>";
}

function z8()
{
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo '$result = ' . $result . "<br/>";
}

function z9()
{
    $text = 'Привет, Мир!';
    echo '$text = ' . $text . "<br/>";
}

function z10()
{
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo $text1 . $text2 . "<br/>";
}

function z11()
{
    $name = 'Эрика';
    echo 'Привет, ' . $name . '!' . "<br/>";
}

function z12()
{
    $age = 19;
    echo 'Мне ' . $age . ' лет!' . "<br/>";
}

function z13()
{
    $text = 'abcde';
    echo $text[0] . ', ' . $text[2] . ', ' . $text[4] . "<br/>";
}

function z14()
{
    $text = 'abcde';
    $text[0] = '!';
    echo '$text = ' . $text . "<br/>";
}

function z15()
{
    $str = '12345';
    $sum = $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
    echo 'Сумма = ' . $sum . "<br/>";
}

function z16()
{
    $hour = 60 * 60;
    echo 'Количество суекнд в часе: ' . $hour . "<br/>";
    $day = 60 * 60 * 24;
    echo 'Количество секунд в сутках: ' . $day . "<br/>";
    $month = 60 * 60 * 24 * 28;
    echo 'Количество секунд в месяце (если количество дней = 28): ' . $month . "<br/>";
    $month = 60 * 60 * 24 * 29;
    echo 'Количество секунд в месяце (если количество дней = 29): ' . $month . "<br/>";
    $month = 60 * 60 * 24 * 30;
    echo 'Количество секунд в месяце (если количество дней = 30): ' . $month . "<br/>";
    $month = 60 * 60 * 24 * 31;
    echo 'Количество секунд в месяце (если количество дней = 31): ' . $month . "<br/>";
}

function z17()
{
    date_default_timezone_set("Asia/Sakhalin");
    $hour = date("H");
    $minute = date("i");
    $second = date("s");
    echo '' . $hour . ':' . $minute . ':' . $second . "<br/>";
}

function z18()
{
    $number = 5;
    echo 'Число 5 в квардате = ' . pow($number, 2) . "<br/>";
}

function z19()
{
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo '$var = ' . $var . "<br/>";
}

function z20()
{
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo '$text = ' . $text . "<br/>";
}

function z21()
{
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo '$var = ' . $var . "<br/>";
}

function z22()
{
    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo '$var = ' . $var . "<br/>";
}

echo 'Задание 1<br/>';
z1();
echo '<br/>Задание 2<br/>';
z2();
echo '<br/>Задание 3<br/>';
z3();
echo '<br/>Задание 4<br/>';
z4();
echo '<br/>Задание 5<br/>';
z5();
echo '<br/>Задание 6<br/>';
z6();
echo '<br/>Задание 7<br/>';
z7();
echo '<br/>Задание 8<br/>';
z8();
echo '<br/>Задание 9<br/>';
z9();
echo '<br/>Задание 10<br/>';
z10();
echo '<br/>Задание 11<br/>';
z11();
echo '<br/>Задание 12<br/>';
z12();
echo '<br/>Задание 13<br/>';
z13();
echo '<br/>Задание 14<br/>';
z14();
echo '<br/>Задание 15<br/>';
z15();
echo '<br/>Задание 16<br/>';
z16();
echo '<br/>Задание 17<br/>';
z17();
echo '<br/>Задание 18<br/>';
z18();
echo '<br/>Задание 19<br/>';
z19();
echo '<br/>Задание 20<br/>';
z20();
echo '<br/>Задание 21<br/>';
z21();
echo '<br/>Задание 22<br/>';
z22();
