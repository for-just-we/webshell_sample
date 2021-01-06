<?php
function sql_split($sql) {
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
			if($str1 != '#' && $str1 != '-') 
				$ret[$num] .= $query;
		}
		$num++;
	}
	return $ret;
}

$ret = sql_split($_POST['sql']);
echo $ret;
?> 