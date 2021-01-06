<?php 
defined('IN_PHPCMS') or exit('No permission resources.');

if(defined('IN_ADMIN')) {
	echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";
}
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

echo '</div>';

 
?>

