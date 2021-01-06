<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
/**
 * 点击统计
 */


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



?>