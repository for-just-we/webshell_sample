<?php 
defined('IN_PHPCMS') or exit('No permission resources.');


$content_tag = pc_base::load_app_class("content_tag", "content");

	$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));

$n=1;
if(is_array($data)){
	foreach($data AS $r) {
		echo $r['catname']; 
		$n++;
	}
	unset($n); 
}

 
?>

