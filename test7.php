<?php

$code = '123456bdtoutiao';
$result = strpos($code,'bdtoutiao',0);

var_dump($result);

/*

		$code = 'toutiao';
		$needle = array('bdtoutiao', 'benditoutiao');
		$data = new \stdClass();
		foreach ($needle as $item) {
			$result = strpos($code, $item, 0);
			var_dump($result);
			if (false !== $result) {
				$data->is_bdtt = 1;
				return $data;
			}
		}
		$data->is_bdtt = 0;
		
		*/
	//	var_dump($data);