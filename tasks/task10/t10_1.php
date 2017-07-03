<?php
$month=$_POST['month'];
//$_REQUEST ('month')
echo "Дней в месяце "; mouth($month);
function mouth ($month)
{
    if (($month=="Январь") or ($month=="Март") or ($month=="Май") or ($month=="Июль") or ($month=="Август") or ($month=="Октябрь") or ($month=="Декабрь")) echo "31";
else
    if (($month=="Апрель") or ($month=="Июнь") or ($month=="Сентябрь") or ($month=="Ноябрь")) echo "30";
    else
        if ($month=="Февраль") echo "28";

}
