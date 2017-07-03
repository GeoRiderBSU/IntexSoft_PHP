<?php
//функция принимающая имя и выводящая его в массив
$string="Pavel";
sp ($string);
function sp($string)
{
    $arr=str_split($string);
    echo "<pre>"; print_r($arr); "</pre>";
}


