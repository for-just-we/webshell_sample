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
        $regexp    = "/^[a-z0-9_]+([_\\.-][a-z0-9_]+)*@([a-z0-9_]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
}
?>