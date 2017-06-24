<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Task 8 SWITCH</title>
<!--Стили таблицы-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" >
</head>
<body>
<?php
$chet1=null; $nech=null; $chet2=null; $chet3=null; //*исходные переменные chet1 - кол-во четных,
//chet2 - сумма четных, chet3 - среднее четных, nech - сумма нечетных
for ($i=-39; $i<=102; $i=($i+9)) //шаг цикла - 9
    {switch ($i)
        {
            case ($i%2)==0: $chet1++;
            case ($i%2)==0: $chet2=($chet2+$i);//проверка на четность, с одновременным подсчетом
            break;
            case ($i%2)!=0: $nech=($nech+$i);//проверка на нечетность
            break;
        }
    }

?>
<!--Таблица результатов-->
<p  align="center">Задание 8 "Поиск чисел в интервале -39 - 102"</p>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Кол-во четных</th>
            <th>Сумма нечетных</th>
            <th>Среднее четных</th>
            <th>Кол-во простых</th>
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