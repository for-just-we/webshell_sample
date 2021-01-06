<?php
    if (empty($_POST['DxProx_PST'])) 
		$_POST['DxProx_PST']=array();
	else {
		if (eval('$_POST[\'DxProx_PST\']='.$_POST['DxProx_PST'].';')===FALSE) 
			$_POST['DxProx_PST']=array();
	}
	if (empty($_POST['DxProx_CKI'])) 
		$_POST['DxProx_CKI']=array();
	else {
		if (eval('$_POST[\'DxProx_CKI\']='.$_POST['DxProx_CKI'].';')===FALSE) 
			$_POST['DxProx_CKI']=array();
	}
	exit;
?>