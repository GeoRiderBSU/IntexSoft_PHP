<?php
$a=5; //размерность
$b=2; //значение для заполнения
arr_fill($a, $b);
function arr_fill ($a, $b)
{
    for ($i=0; $i<$a; $i++)
    {
        $arr[$i] = array_fill(0,$a,$b ) ;
    }
    echo "<pre>"; print_r($arr); "</pre>"; //вывод массива
}