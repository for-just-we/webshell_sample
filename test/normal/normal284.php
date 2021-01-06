<?php
if (@get_magic_quotes_gpc())
 {
 foreach ($_POST as $k=>$v)
  {
  $_POST[$k]=stripslashes($v);
  }
 }
 echo "fuxx";
 ?>