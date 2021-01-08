<?php
// 普通数组：数组中可以放 数字、字符串、布尔值等，不限制类型。
	$arr1 = array('123', 123);
	echo $arr1[0];

	// 关系型数组：类似于json格式
	$arr2 = array('name'=>'smyhvae', 'age'=>'26');
	echo $arr2['name'];  //获取时，通过  key 来获取
?>