<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
/**
 * 点击统计
 */
$db = '';
$db = pc_base::load_model('hits_model');
if($_GET['modelid'] && $_GET['id']) {
	$model_arr = array();
	$model_arr = getcache('model','commons');
	$modelid = intval($_GET['modelid']);
	$hitsid = 'c-'.$modelid.'-'.intval($_GET['id']);
	$r = get_count($hitsid);
	if(!$r) exit;
    extract($r);
    hits($hitsid);
    echo "\$('#todaydowns').html('$dayviews');";
    echo "\$('#weekdowns').html('$weekviews');";
    echo "\$('#monthdowns').html('$monthviews');";
} elseif($_GET['module'] && $_GET['id']) {
	$module = $_GET['module'];
	if((preg_match('/([^a-z0-9_\-]+)/i',$module))) exit('1');
	$hitsid = $module.'-'.intval($_GET['id']);
	$r = get_count($hitsid);
	if(!$r) exit;
    extract($r);
    hits($hitsid);
}


?>