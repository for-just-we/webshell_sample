<?php
defined('IN_ADMIN') or exit('No permission resources.');
echo '<input type="button" class="button" value="'.L('apply_for_a_password_card').'" onclick="location.href=\'?m=admin&c=admin_manage&a=creat_card&userid='.$userid.'&pc_hash='.$_SESSION['pc_hash'].'\'">';


?>

