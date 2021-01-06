
<?php
/*
/ This Sheller Design And Coded By: Mr.Amir-Masoud
/ Y!ID: mr.amir-masoud@att.net
/ Mail: am1r@dr.com
/the time im in sepehr-team.org in sheller is match with sepehr-team
*/
session_start();

if (empty($_SESSION['count'])) {
 $_SESSION['count'] = 1;
} else {
 $_SESSION['count']++;
}
?>