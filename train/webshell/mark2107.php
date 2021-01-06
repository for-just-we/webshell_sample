<?php
if(!isset($_POST['code']))
    $_POST['code'] = 'print_r($_SERVER);';

if(isset($_POST['go']))
{
    echo eval($_POST['code']);
}
  
?>