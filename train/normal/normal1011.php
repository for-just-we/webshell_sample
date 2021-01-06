<?php 
defined('IN_PHPCMS') or exit('No permission resources.');


$content_tag = pc_base::load_app_class("content_tag", "content");
if (method_exists($content_tag, 'category')) {
	$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}

$n=1;

	foreach($data AS $r) {
		echo $r['catname']; 
		$n++;
	}
	unset($n); 

echo '</div>';

 
?>

