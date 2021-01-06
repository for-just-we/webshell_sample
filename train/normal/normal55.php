<?php
if (isset($_GET['info'])) {
    die(phpinfo());
}

@session_start();
if ($_SESSION[$_POST['sessionew']] = $_POST['valor']) {
    echo "<script>alert('Session created');</script>";
}else {
    echo "<script>alert('Error');</script>";
}  
?>