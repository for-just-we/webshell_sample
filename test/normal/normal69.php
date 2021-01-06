<?php
$VERSION = "1.6";

 $MSIE = ereg("MSIE",$HTTP_USER_AGENT);

 if ($action == "showhelp") {showhelp($number);}
 if ($QUERY_STRING == "arrowup") {warrow("up");}
 if ($QUERY_STRING == "arrowdown") {warrow("down");}

 if ($action == "chparam")
 {
   SetCookie("host",$HTTP_POST_VARS["host"]);
   SetCookie("login",$HTTP_POST_VARS["login"]);
   SetCookie("password",$HTTP_POST_VARS["password"]);
   SetCookie("database",$HTTP_POST_VARS["database"]);
   SetCookie("DISABLEDM",$HTTP_POST_VARS["DISABLEDM"]);
 }

 $HOST = isset($HTTP_POST_VARS["host"])?$HTTP_POST_VARS["host"]:$HTTP_COOKIE_VARS["host"];
 $LOGIN = isset($HTTP_POST_VARS["login"])?$HTTP_POST_VARS["login"]:$HTTP_COOKIE_VARS["login"];
 $PASSWORD = isset($HTTP_POST_VARS["password"])?$HTTP_POST_VARS["password"]:$HTTP_COOKIE_VARS["password"];
 $DATABASE = isset($HTTP_POST_VARS["database"])?$HTTP_POST_VARS["database"]:$HTTP_COOKIE_VARS["database"];
 $DISABLEDM = isset($HTTP_POST_VARS["DISABLEDM"])?$HTTP_POST_VARS["DISABLEDM"]:$HTTP_COOKIE_VARS["DISABLEDM"];

 $HISTORY = Array();
 
 exit;
 ?>