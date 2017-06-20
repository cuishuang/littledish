<?php
echo "<pre>\n";
$arr = Array("Arr1","Arr2");
foreach($arr as $array){
 $array = "3" ;
}
print_r( $arr );
echo "\n上面的说明 \$array 是用 值传递 ， 修改 \$array 并没有造成原数组的变化 \n";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


foreach($arr as &$array){
 $array = "3" ;
} 
print_r( $arr );
echo "\n上面的说明 \$array 是用 引用传递(传递的是变量的地址) ， 修改 \$array 造成原数组的变化 \n";
echo "\n这就是区别,你可以关注下  php参数传递方式\n";
?>