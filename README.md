<h1 align="center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>
<p align="center">Лабораторная работа №11</p>
<p align="center">"PHP"</p>
<br>
<p align="right">Работу выполнила Чёо Эрика Ильинична</p>
<p align="right">Работу проверил Соболев Евгений Игоревич</p>

---

### **Цели и задачи**:

1. Создайте переменную `$var` и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
2. Напишите скрипт, который считает количество секунд в часе.
3. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, \*=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:

```php
$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var;
```

4.  Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.
5.  Создайте переменные `$a=10` и `$b=2`. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6.  Создайте переменные `$c=15` и `$d=2`. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
7.  Создайте переменные `$a=10`, `$b=2` и `$c=5`. Выведите на экран их сумму.
8.  Создайте переменные `$a=17` и `$b=10`. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
9.  Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
10. Создайте переменные `$text1='Привет, '` и `$text2='Мир!'`. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
11. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
12. Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.
13. Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
14. Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
15. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
16. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
17. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
18. Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
19. Переделайте этот код так, чтобы в нем использовались операции +=, -=, \*=, /=. Количество строк кода при этом не должно измениться.

```php
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
```

20. Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.

```php
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
```

21. Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.

```php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;
```

22. Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, \*=, /=. Количество строк кода при этом не должно измениться.

```php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
```

---

**Задание 1**

```php
$var = 'hello';
echo $var[0] . ', ' . $var[1] . ', ' . $var[4] . "<br/>";
```

**Задание 2**

```php
$seconds = 60 * 60;
echo $seconds . ' секунд в часе' . "<br/>";
```

**Задание 3**

```php
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo '$var = ' . $var . "<br/>";
```

**Задание 4**

```php
$a = 3;
echo '$a = ' . $a . "<br/>";
```

**Задание 5**

```php
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
```

**Задание 6**

```php
$c = 15;
$d = 2;
$result = $c + $d;
echo '$c + $d = ' . $result . "<br/>";
```

**Задание 7**

```php
$a = 10;
$b = 2;
$c = 5;
$result = $a + $b + $c;
echo '$a + $b + $c = ' . $result . "<br/>";
```

**Задание 8**

```php
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo '$result = ' . $result . "<br/>";
```

**Задание 9**

```php
$text = 'Привет, Мир!';
echo '$text = ' . $text . "<br/>";
```

**Задание 10**

```php
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1 . $text2 . "<br/>";
```

**Задание 11**

```php
$name = 'Эрика';
echo 'Привет, ' . $name . '!' . "<br/>";
```

**Задание 12**

```php
$age = 19;
echo 'Мне ' . $age . ' лет!' . "<br/>";
```

**Задание 13**

```php
$text = 'abcde';
echo $text[0] . ', ' . $text[2] . ', ' . $text[4] . "<br/>";
```

**Задание 14**

```php
$text = 'abcde';
$text[0] = '!';
echo '$text = ' . $text . "<br/>";
```

**Задание 15**

```php
$str = '12345';
$sum = $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
echo 'Сумма = ' . $sum . "<br/>";
```

**Задание 16**

```php
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
```

**Задание 17**

```php
date_default_timezone_set("Asia/Sakhalin");
$hour = date("H");
$minute = date("i");
$second = date("s");
echo '' . $hour . ':' . $minute . ':' . $second . "<br/>";
```

**Задание 18**

```php
$number = 5;
echo 'Число 5 в квардате = ' . pow($number, 2) . "<br/>";
```

**Задание 19**

```php
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo '$var = ' . $var . "<br/>";
```

**Задание 20**

```php
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo '$text = ' . $text . "<br/>";
```

**Задание 21**

```php
$var = 10;
$var++;
$var++;
$var--;
echo '$var = ' . $var . "<br/>";
```

**Задание 22**

```php
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo '$var = ' . $var . "<br/>";
```

---

### **Вывод:**

Данная лабораторная работа помогла мне начать изучение такого языка программирования как PHP.
