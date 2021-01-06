<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
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
            
            // CHECK MESSAGE LENGHT
            if(strlen($message) < $minMessage) {
                echo "<p class='notification red'>Your message must contain at least " . $minMessage . " characters! Please enter a longer message.</p>\n";
                $lenghtError = true;
            }
            elseif(strlen($message) > $maxMessage) {
                echo "<p>Your message can not contain more than " . $maxMessage . " characters! Please enter a shorter message.</p>\n";
                $lenghtError = true;
            }
            
            // CHECK CAPTCHA LENGHT
            if(strlen($captcha) !== 4) {
                echo "<p class='notification red' class='notification red'>Your captcha verefication can not contain more or less than 4 characters!</p>\n";
                $lenghtError = true;
            }
            
            if($lenghtError !== true) {
                
                // VALID EMAIL ?
                if(!preg_match($regexp, $email)) {
                    echo "<p class='notification red'>Your email is not valid! Please try again.</p>\n";
                    $error = true;
                }
                
                // CAPTCHA CORRECT?
                if($captcha !== $captchaVer) {
                    echo "<p class='notification red'>Your captcha verefication code was inccorect! Please try again.</p>\n";
                    $error = true;
                }
                
                if($error !== true) {
                    $insertQuery = "INSERT INTO `guestbook` (`name`, `email`, `showEmail`, `enableEmoticons`, `message`, `time`, `ip`) VALUES ('" . $name . "', '" . $email . "', '" . $showEmail . "', '0', '" . $message . "', '" . $time . "', '" . $ip . "')";
                    $insert = mysql_query($insertQuery);
                    if($insert) {
                        echo "<p class='notification green'>Your message was successfully stored into the guestbook database!<br /><a href=\"?page=guestbook&amp;action=viewComments\">Click Here</a> to view the guestbook entries.</p>\n";
                        $success = true;
                    }
                    else {
                        echo "<p class='notification red'>Error<br />" . mysql_error() . "</p>\n";
                    }
                }
            }
        
    }

?>