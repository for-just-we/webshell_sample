<?php
$sql = $_POST['sql'];
echo $sql;
$sql = str_replace("\r", "\n", $sql);
$ret = array();
$num = 0;
$queriesarray = explode(";\n", trim($sql));
unset($sql);
foreach($queriesarray as $query) {
	$ret[$num] = '';
	$queries = explode("\n", trim($query));
	$queries = array_filter($queries);
	foreach($queries as $query) {
		$str1 = substr($query, 0, 1);
		if($str1 != '#' && $str1 != '-') 
			$ret[$num] .= $query;
	}
	$num++;
}
?>