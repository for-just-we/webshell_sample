<?php
defined('IN_PHPCMS') or exit('No permission resources.');
$field = trim($_GET['field']);
$modelid = intval($_GET['modelid']);
$data = getcache('model_field_'.$modelid,'model');

$setting = explode("", $data[$field]['setting']);
$key = $setting['api_key'];
$key = str_replace(array('/','(',')','&',';'),'',$key);
$maptype = intval($_GET['maptype']);
$defaultcity = $_GET['defaultcity'];

$hotcitys = explode(",",$setting['hotcitys']);
?>