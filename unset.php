<?php

$array=['a','b','c','d','e','f'];

$key = array_search('d',$array);

//var_dump($key);

unset($array[$key]);

//var_dump($array);
//var_export($array);


for($i=0;$i<count($array);$i++){
	
	$arr = array();
	//echo $i;
	//echo '<br>';
	$arr[$i] = $array[$i];
	echo '<pre>';
	
	var_dump($arr);
	
	
	
	
}