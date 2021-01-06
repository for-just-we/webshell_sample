<?php
$pid = $_GET['page-id'];
$tPages = round(count($keyTables) / $websiteProperty->getProperty("max_key_entries_per_page"), 0);

if(empty($pid)) 
	$pid = 1; 

			
if($pid > 1)
	$count = $websiteProperty->getProperty("max_key_entries_per_page") * ( $pid - 1);
else 
	$count = 0;

$keys = array();
$j = 0;
foreach($keyTables as $key) {
	if($j >= $count && $j < $count + $websiteProperty->getProperty("max_key_entries_per_page")) 
		$keys[] = $key;
	$j++;
}
?>