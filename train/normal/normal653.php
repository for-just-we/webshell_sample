<?php

// FUNCTION TO SELECT A RANDOM CHARACTER OUT OF A STRING
function random_char($string) {
    $length = strlen($string);
    $position = mt_rand(0, $length - 1);
    return $string[$position];
}

$width = 60; // IMG WIDTH (PX)
$height = 25; // IMG HEIGHT (PX)
$characters = "abcdefghijklmnopqrstuvwxyz0123456789"; // CHARACTERS FOR CAPTCHA STRING
$font = "fonts/calibri.ttf"; // FONT LOCATION
$fontS = 14; // FONT SIZE (PX)
$min = 25; // MIN NUMBER FOR THE RANDOM RGB TEXT COLOR
$max = 200; // MAX NUMBER FOR THE RANDOM RGB TEXT COLOR
$eBorder = false; // ENABLE BORDER, "true" TO ENABLE & "false" TO DISABLE
$eLines = true; // ENABLE LINES, "true" TO ENABLE & "false" TO DISABLE (RECOMMENDED TO ENABLE)
$MiLC = 200; // MIN LINE COLOR
$MaLC = 250; // MAX LINE COLOR
$maxLines = 10; // MAX LINES (RECOMMENDED BETWEEN 5 & 15)
// ADVANCED
////////////
$positionCharacterX = 3; // POSITION CHARACTER 1 ON THE X-AXIS (PX)
$characterSpace = 14; // SPACE FOR 1 CHARACTER (PX)
$positionCharactersY = 18; // SPACE ON THE Y-AXIS (PX)

// // // // // // // // // // // // //

$img = imagecreate($width, $height);
imagecolorallocate($img, 255, 255, 255); // BACKGROUND COLOR IN RGB

$randNr1 = rand($min, $max); // RANDOM NUMBER 1 BETWEEN $min & $max
$randNr2 = rand($min, $max); // RANDOM NUMBER 2 BETWEEN $min & $max
$randNr3 = rand($min, $max); // RANDOM NUMBER 3 BETWEEN $min & $max

$randomChar1 = random_char($characters); // RANDOM CHARACTER 1
$randomChar2 = random_char($characters); // RANDOM CHARACTER 2
$randomChar3 = random_char($characters); // RANDOM CHARACTER 3
$randomChar4 = random_char($characters); // RANDOM CHARACTER 4

$textcolor1 = imagecolorallocate($img, $randNr1, $randNr2, $randNr3); // TEXT COLOR 1
$textcolor2 = imagecolorallocate($img, $randNr2, $randNr3, $randNr1); // TEXT COLOR 2
$textcolor3 = imagecolorallocate($img, $randNr3, $randNr1, $randNr2); // TEXT COLOR 3
$textcolor4 = imagecolorallocate($img, $randNr3, $randNr2, $randNr1); // TEXT COLOR 4

if($eLines == true) {
    for($i=0; $i <= $maxLines; $i++) {
        $linesC = imagecolorallocate($img, rand($MiLC, $MaLC), rand($MiLC, $MaLC), rand($MiLC, $MaLC));
        imageline($img, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $linesC);
    }
}


header("content-type: image/png"); // CONTENT TYPE

imagepng($img); // CREATE IMAGE
imagedestroy($img); // DESTROY IMAGE
?>