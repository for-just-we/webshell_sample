<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
/**
 * 点击统计
 */
$db = '';
$db = pc_base::load_model('hits_model');
if($_GET['module'] && $_GET['id']) {
	$module = $_GET['module'];
	if((preg_match('/([^a-z0-9_\-]+)/i',$module))) exit('1');
	$hitsid = $module.'-'.intval($_GET['id']);
	$r = get_count($hitsid);
	if(!$r) exit;
    extract($r);
    hits($hitsid);
}


?>