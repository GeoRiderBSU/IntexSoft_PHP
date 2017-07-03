<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Task 8 Primes</title>
    <!--Стили таблицы-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css" >
</head>
<body>
<?php
//Поиск простых чисел
$sum=0; $pr=0;
function isprime($n)//функция поиска на переборе делителей
{global $pr;
    if ($n == 1) // 1 - не простое число
        return $pr=0;
    // перебираем возможные делители от 2 до sqrt(n)
    for ($d = 2; $d * $d <= $n; $d++) {
        // если разделилось нацело, то составное
        if ($n % $d == 0)
            return $pr=0;
    }
    // если нет нетривиальных делителей, то простое
    return $pr=1;
}
for ($n=-39; $n<=102; $n=($n+9))
{
    if ($n>=0) isprime($n); //запуск функции
        if ($pr!=0) $sum++; //счетчик по результатам работы isprimes

}
?>
<h2 align="center">Поиск простых чисел в диапазоне -39 - 102 с шагом 9</h2>
<h3 align="center">
    <?
    if($sum!=0)
        echo "Результат: простых чисел в диапазоне = $sum";
            else
                echo "Результат: простых чисел в диапазоне нет" ;
?>
    </h3>
</body>
</html>
