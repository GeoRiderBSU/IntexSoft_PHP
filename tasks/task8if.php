<html>
<head>
    <meta charset="UTF-8">
    <title>Task 8 IF</title>
    <!--стили оформления таблицы-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" >
</head>
<body>
<?php
$chet1=null; $nech=null; $chet2=null; //*переменные для вычислений chet1 - кол-во четных,
// chet2 - сумма четных, nech - cумма нечетных
for ($i=-39; $i<=102; $i=($i+9))
{if (($i%2)==0) $chet1++; //если остаток = 0, четное
else
    if(($i%2)!=0) $nech=($nech+$i); //если остаток не равен 0, нечетное

    if (($i%2)==0) $chet2=($chet2+$i);} //тоже самое, что для chet1, но суммирует четные
    $chet3=$chet2/$chet1 //среднее четных
    ?>
<!--Таблица результатов-->
<h1 align="center">Задание 8 "Поиск чисел в интервале -39 - 102 с шагом 9"</h1>
<div class="container">
    <table class="table table-bordered">
        <thead>
    <tr>
        <th>Кол-во четных</th>
        <th>Сумма нечетных</th>
        <th>Среднее четных</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $chet1;?> </td>
        <td><?php echo $nech;?></td>
        <td><?php echo $chet3;?></td>
    </tr>

    </tbody>
</table></div>
</body>
</html>