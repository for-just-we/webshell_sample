<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

$session_storage = 'session_'.pc_base::load_config('system','session_storage');
session_start();
$checkcode = pc_base::load_sys_class('checkcode');
if (isset($_GET['code_len']) && intval($_GET['code_len'])) 
	$checkcode->code_len = intval($_GET['code_len']);
if (isset($_GET['font_size']) && intval($_GET['font_size'])) 
	$checkcode->font_size = intval($_GET['font_size']);
if (isset($_GET['width']) && intval($_GET['width'])) 
	$checkcode->width = intval($_GET['width']);

if (isset($_GET['font_color']) && trim(urldecode($_GET['font_color']))) 
	$checkcode->font_color = trim(urldecode($_GET['font_color']));

$checkcode->doimage();
$_SESSION['code']=$checkcode->get_code();
?>