<?php
$a=3;
$b=1;
fill($a, $b);
function fill ($a, $b)
{
    $arr=array_fill(0, $a, $b);
    echo "<pre>"; print_r($arr); "</pre>";
}