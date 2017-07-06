<?php

/*
可能会出现'Fatal error: Maximum execution time of 30 seconds exceeded in C:\xampp\htdocs\1\spider.php on line xxx'问题

有两种方式：

修改php.ini文件，找到 max_execution_time，修改对应的值为你想要的值；
使用ini_set()函数，如：ini_set('max_execution_time', '100')；则设置为100秒，你也可以设置为0，那么就是不限制执行的时间。

*/


ini_set('max_execution_time', '0');

for($i = 1; $i <= 5; $i++)
{
	//echo $i;
	//die;

  
    $content = file_get_contents("http://www.juzimi.com/writer/%E4%B9%9D%E6%8A%8A%E5%88%80?page=$i");

    print_r($content);

	/*
   preg_match_all('/<p>(.*?)<\/p>/',$content,$p);
   
 
    $array_text = $p[0];
	

    foreach($array_text as $value){
		
        echo $value;
		echo '<br>';
		
    }
	*/
}
	
	
   // var_dump($new);

