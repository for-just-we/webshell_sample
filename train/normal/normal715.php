<?php
defined('IN_ADMIN') or exit('No permission resources.');
$pic_url = $_GET['pic'];
echo '<input type="button" class="button" value="'.L('the_password_card_binding').'" onclick="location.href=\'?m=admin&c=admin_manage&a=remove_card&userid='.$userid.'&pc_hash='.$_SESSION['pc_hash'].'\'"><div class="bk15"></div><img src="'.$pic_url.'">';
?>

