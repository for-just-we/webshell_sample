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
            // CHECK NAME LENGHT
            if(strlen($name) < $minName) {
                echo "<p class='notification red'>Your name must contain at least " . $minName . " characters! Please enter a longer name.</p>\n";
                $lenghtError = true;
            }
            elseif(strlen($name) > $maxName) {
                echo "<p class='notification red'>Your name can not contain more than " . $maxName . " characters! Please enter a shorter name.</p>\n";
                $lenghtError = true;
            }
            
            // CHECK EMAIL LENGHT
            if(strlen($email) < $minEmail) {
                echo "<p class='notification red'>Your email must contain at least " . $minEmail . " characters! Please enter a longer email.</p>\n";
                $lenghtError = true;
            }
            elseif(strlen($email) > $maxEmail) {
                echo "<p class='notification red'>Your email can not contain more than " . $maxEmail . " characters! Please enter a shorter email.</p>\n";
                $lenghtError = true;
            }
            
        
    

?>