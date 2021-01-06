<?php
        $name = addslashes(ucfirst(trim($_POST['name']))); // NAME
        $email = addslashes($_POST['email']); // EMAIL
        $showEmail = $_POST['showEmail']; // SHOW/HIDE EMAIL
        $emoticons = $_POST['emoticons']; // ENABLE/DISABLE EMOTICONS
        $message = addslashes(ucfirst(trim($_POST['message']))); // MESSAGE
        $captcha = $_POST['captcha']; // CAPTCHA
        $captchaVer = $_SESSION['captcha']; // CAPTCHA CHECK
        $time = date("Y/m/d H:i:s"); // TIME
        $ip = $_SERVER['REMOTE_ADDR']; // IP
        $regexp    = "/^[a-z0-9_]+([_\\.-][a-z0-9_]+)*@([a-z0-9_]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i"; // EMAIL CHECK
        
        // GENERAL FIELD CHECK
        if(strlen($name) < 1 or strlen($email) < 1 or strlen($message) < 1 or strlen($captcha) < 1) {
            echo "<p class='notification red'>Make sure all the required fields are correctly filled in!</p>\n";
            $generalError = true;
        }
       

?>