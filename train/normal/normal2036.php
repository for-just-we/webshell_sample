<?php
$sql = str_replace("\r", "\n", $sql);
$ret = array();
$num = 0;
$queriesarray = explode(";\n", trim($sql));

foreach($queriesarray as $query) {
	$ret[$num] = '';
	$queries = explode("\n", trim($query));
	$queries = array_filter($queries);
	foreach($queries as $query) {
		$str1 = substr($query, 0, 1);
		$ret[$num] .= $query;
	}
	$num++;
}

echo $ret;
?>