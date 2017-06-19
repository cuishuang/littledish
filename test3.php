<?php

$Arr1=array("怎","实","高");
$Arr2=array("么","现","兴");
$Arr3=array("样","了","吗");
$Arr4 = array();
foreach ($Arr1 as $k => $r) {
     $Arr4[] = array($Arr1[$k],$Arr2[$k],$Arr3[$k]);
}
echo '<pre>';
print_r($Arr4);

echo '<br/>';


$time = date("Y-m-d H:i:s",time()-259200);


print_r($time);


