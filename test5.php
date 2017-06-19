<?php

function array_remove(&$arr,$offset){ 
array_splice($arr,$offset,1); 
} 
$a = array('a','b','c','d'); 
array_remove($a,2); 
print_r($a); 