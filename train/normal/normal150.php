<?php
if (@get_magic_quotes_gpc())
{
 foreach ($_POST as $k=>$v)
 {
  $_POST[$k] = stripslashes($v);
 }
 foreach ($_COOKIE as $k=>$v)
 {
  $_COOKIE[$k] = stripslashes($v);
 } 
}
 
 ?>