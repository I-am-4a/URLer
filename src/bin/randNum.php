<?php
	// Base: [PHP]文字の種類ごとに最低1つ以上使ったランダム文字列
	// by PHP-Archive
	// https://php-archive.net/php/group-random/
	
	function randNum($length=10) {
		$char = array();
	 
		//使用する文字列
		$char[] = range(0,9);
		$char[] = range('a','z');
		$char[] = range('A','Z');
		$char[] = array('_', '-');
	 
		$list	 = array();
		$merge	 = array();
		$count	 = 0;
	 
		foreach($char as $arr){
			shuffle($arr);
			$list[] = $arr[0];
			$merge = array_merge($merge, $arr);
			$count++;
		}
		 
		$flip = array_flip($merge);
		while($count< $length){
			$list[] = array_rand( $flip, 1);
			$count++;
		}
		shuffle($list);
		return implode("", $list);
	}
?>