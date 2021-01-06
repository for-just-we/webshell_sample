<?php 
defined('IN_PHPCMS') or exit('No permission resources.');


echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";

$content_tag = pc_base::load_app_class("content_tag", "content");

$n=1;

if(defined('IN_ADMIN') && !defined('HTML')) {
	echo '</div>';
}
 
?>

