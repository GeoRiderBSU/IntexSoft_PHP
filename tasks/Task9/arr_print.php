<?php
//функция вывода массива
$arr1=array (1,2,3,4,5); //простой одномерный массив
$arr2=array
(
    1,2,3,4,5,
    array(6,7,8,9,10),
    11,12,13,14,15); //смешанный массив

echo "Массив 1 <br>";
arr_pr ($arr_p=$arr1);
echo "Массив 2 <br>"; arr_pr($arr_p=$arr2);
function arr_pr ($arr_p)
{
        foreach($arr_p as $value)
        {
            if (is_array($a=$value)==false)
                echo "$value <br />";
            else {
                 foreach ($a as $value)
                  {
                    echo "=> $value <br />";
                }
                }
        }
}
